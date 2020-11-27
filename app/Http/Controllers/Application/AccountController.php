<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Account;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Admin;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Jobs\SendVerifyEmail;
use App\Jobs\SendResetPasswordEmail;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Services\SocialAccountService;
use Socialite;

class AccountController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            switch ($role) {
                case UserRole::Student:{
                    return redirect()->route('student_dashboard', ['username' => Auth::user()->username]);
                }
                case UserRole::Instructor:{
                    return redirect()->route('instructor_dashboard', ['username' => Auth::user()->username]);
                }
                case UserRole::Admin:{
                    return redirect()->route('named_route', ['parameterKey' => 'value']);
                }
                default:{
                    return redirect()->route('home');
                }
            }
        } else {
            return view('index');
        }
    }
    public function getUser($username)
    {
        $account = DB::table('accounts')->select('role')->where('username', $username)->first();
        $role = 9;
        if ($account!= null) {
            $role = $account->role;
        }
        switch ($role) {
            case UserRole::Student:{
                return redirect()->route('instructor_dashboard', ['username' => $username]);
            }
            case UserRole::Instructor:{
                return redirect()->route('student_dashboard', ['username' => $username]);
            }
            default:{
                return redirect()->route('home');
            }
        }
    }
    public function isFieldExist($field, $value)
    {
        return Account::where($field, '=', $username)->first() != null;
    }
    public function isUsernameExist($username)
    {
        return isFieldExist('username', $username);
    }
    public function isEmailExist($email)
    {
        return isFieldExist('email', $email);
    }

    public function store(Request $request)
    {
        $confirmation_code = time().uniqid(true);
        $account = new Account;
        $account->name = $request->name;
        $account->username = $request->username;
        $account->email = $request->email;
        $account->confirmation_code = $confirmation_code;
        $account->password = Hash::make($request->password);
        if ($request->role == 'instructor') {
            $account->role = UserRole::Instructor;
            $user = new Instructor;
        } else {
            $user = new Student;
            $account->role = UserRole::Student;
        }
        $account->save();
        $user->account()->associate($account);
        $user->account_id = $account->id;
        // $account->user()->associate($user);
        $user->save();
        dispatch(new SendVerifyEmail($account));
        Session::put("register_success", $request->username." đã đăng ký thành công");
    }

    public function verify($code)
    {
        $account = Account::where('confirmation_code', $code)->first();
        if ($account) {
            $account->is_verified = true;
            $account->confirmation_code = null;
            $account->save();
            Auth::login($account, true);
            return redirect()->route('home');
        } else {
            $notification_status ='Mã xác nhận không chính xác';
            return redirect(route('signup'))->with('status', $notification_status);
        }
    }

    public function sendVerify($login_info)
    {
        if (filter_var($login_info, FILTER_VALIDATE_EMAIL)) {
            $account = Account::where('email', $login_info)->first();
        } else {
            $account = Account::where('username', $login_info)->first();
        }
        if ($account) {
            $confirmation_code = time().uniqid(true);
            $account->confirmation_code = $confirmation_code;
            $account->save();
            dispatch(new SendVerifyEmail($account));
            return response()->json(['status'=>'success','mss'=>'Đã gửi email xác thực cho '.$account->email]);
        }
        return response()->json(['status'=>'error', 'mss'=>'Không tìm thấy thông tin đăng nhập '.$account->email]);
    }

    public function policy()
    {
        return view('application.account.pricing');
    }
    public function pricing()
    {
        return view('application.account.pricing');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function login()
    {
        return view('application.account.login');
    }
    public function authenticate(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
        }
        $login_info = $request->login;
        // $pass = $request->password;
        if (filter_var($login_info, FILTER_VALIDATE_EMAIL)) {
            //user sent their email
            Auth::attempt(['email' => $login_info, 'password' => $request->password], $request->remember_me);
        } else {
            //they sent their username instead
            Auth::attempt(['username' => $login_info, 'password' => $request->password], $request->remember_me);
        }
        if (Auth::check()) {
            if (Auth::user()->is_verified) {
                // Authentication passed...
                $a = Auth::user()->role;
                if (Auth::user()->role == UserRole::Instructor) {
                    return response()->json(['status'=>'success', 'mss'=>route('instructor_dashboard', ['username' => Auth::user()->username])]);
                    // return redirect()->route('instructor_dashboard', ['username' => Auth::user()->username]);
                }
                if (Auth::user()->role == UserRole::Student) {
                    return response()->json(['status'=>'success', 'mss'=>route('student_dashboard', ['username' => Auth::user()->username])]);
                    // return redirect()->route('student_dashboard', ['username' => Auth::user()->username]);
                }
            }
            $email = Auth::user()->email;
            Auth::logout();
            return response()->json(['status'=>'error_verify', 'mss'=>"Tài khoản chưa được xác thực.", 'email'=>$email]);
        }
        if (filter_var($login_info, FILTER_VALIDATE_EMAIL)) {
            $user = Account::where('email', '=', $login_info)->first();
        } else {
            $user = Account::where('username', '=', $request->login)->first();
        }
        if ($user == null) {
            return response()->json(['status'=>'error_info', 'mss'=>"Không tìm thấy thông tin đăng nhập."]);
        } else {
            return response()->json(['status'=>'error_password', 'mss'=>"Sai mật khẩu."]);
        }
    }

    public function signup()
    {
        return view('application.account.signup');
    }
    public function postsignup(Request $request)
    {
        $rules = array(
            'name'=>'bail|required|string|min:2|',
            'username'=>'bail|required|string|min:2|unique:accounts',
            'email'=>'bail|required|email|unique:accounts',
            'password'=>'bail|required|string|min:6'
        );
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $this->store($request);
            $request->flash();
            return redirect(route('signup_payment'));
        } else {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function signup_payment()
    {
        return view('application.account.signup-payment');
    }
    
    public function change_password(Request $request)
    {
        return view('application.account.reset-password', ['code'=>$request->code]);
    }
    public function post_change_password(Request $request)
    {
        $account = Account::where('confirmation_code', $request->code)->first();
        if ($account) {
            $account->password = Hash::make($request->password);
            $account->confirmation_code = null;
            $account->save();
            Auth::login($account, true);
            return redirect()->route('home');
        } else {
            $notification_status ='Đường dẫn hết hạn';
            return response(['error'=>true,'error-msg'=>$notification_status], 419);
        }
    }

    public function forgot_password(Request $request)
    {
        $login_info = $request->email;
        if (filter_var($login_info, FILTER_VALIDATE_EMAIL)) {
            $account = Account::where('email', '=', $login_info)->first();
        } else {
            $account = Account::where('username', '=', $login_info)->first();
        }
        if ($account == null) {
            return response()->json(['status'=>'error', 'mss'=>"Không tìm thấy thông tin đăng nhập."]);
        } else {
            $confirmation_code = time().uniqid(true);
            $account->confirmation_code = $confirmation_code;
            $account->save();
            dispatch(new SendResetPasswordEmail($account));
            return response()->json(['status'=>'success', 'mss'=>"Email hướng dẫn đổi mật khẩu đã được gửi cho bạn nếu email/username của bạn tồn tại
            trong hệ thống."]);
        }
    }

    public function edit_account()
    {
        return view('application.account.edit-account');
    }

    public function profile_privacy()
    {
        return view('application.account.profile-privacy');
    }

    public function email_notification()
    {
        return view('application.account.email-notification');
    }

    public function account_password()
    {
        return view('application.account.account-password');
    }

    public function billing()
    {
        return view('application.account.subscription');
    }

    public function billing_upgrade()
    {
        return view('application.account.upgrade');
    }

    public function billing_payment()
    {
        return view('application.account.payment-information');
    }

    public function billing_history()
    {
        return view('application.account.payment-history');
    }

    public function billing_invoice()
    {
        return view('application.account.invoice');
    }

    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social)
    {
        $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->user(), $social);
        auth()->login($user);
        return redirect()->route('home');
    }
}
