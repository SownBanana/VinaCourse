<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\SkillController;
use App\Http\Controllers\Student\TakeController;

use App\Http\Controllers\Instructor\InstructorController;

use App\Http\Controllers\Application\AccountController;
use App\Http\Controllers\Application\CMSController;
use App\Http\Controllers\Application\CommunityController;
use App\Http\Controllers\Application\EnterpriseController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [AccountController::class, 'home'])->name('home');
Route::get('/{username}', [AccountController::class, 'getUser'])->name('get_user_home');
// Student router
Route::group(['prefix' => 'student'], function () {
    Route::get('/{username}/dashboard', [StudentController::class, 'dashboard'])->name('student_dashboard');
    Route::get('/{username}/course-preview', [StudentController::class, 'coursepreview']);
    Route::get('/{username}/lesson-preview', [StudentController::class, 'lessonpreview']);
    Route::get('/{username}/browse-course', [StudentController::class, 'browsecourse']);
    Route::get('/{username}/browse-path', [StudentController::class, 'browsepath']);
    Route::get('/{username}/my-course', [StudentController::class, 'mycourse']);
    Route::get('/{username}/my-path', [StudentController::class, 'mypath']);
    Route::get('/{username}/path-detail', [StudentController::class, 'pathdetail']);
    
    Route::get('/{username}/take-course', [TakeController::class, 'takecourse']);
    Route::get('/{username}/take-lession', [TakeController::class, 'takelesson']);
    Route::get('/{username}/take-quiz', [TakeController::class, 'takequiz']);
    Route::get('/{username}/my-quizzes', [TakeController::class, 'myquizzes']);
    Route::get('/{username}/quiz-result', [TakeController::class, 'quizresult']);
    
    Route::get('/{username}/skill-assessment', [SkillController::class, 'skillassessment']);
    Route::get('/{username}/skill-result', [SkillController::class, 'skillresult']);
});

// Instructor router
Route::group(['prefix' => 'instructor'], function () {
    Route::get('/{username}', [InstructorController::class, 'dashboard']);
    Route::get('/{username}/dashboard', [InstructorController::class, 'dashboard'])->name('instructor_dashboard');
    Route::get('/{username}/manage-courses', [InstructorController::class, 'manage_courses']);
    Route::get('/{username}/manage-quizzes', [InstructorController::class, 'manage_quizzes']);
    Route::get('/{username}/earning', [InstructorController::class, 'earning']);
    Route::get('/{username}/statement', [InstructorController::class, 'statement']);
    Route::get('/{username}/edit-course', [InstructorController::class, 'edit_course']);
    Route::get('/{username}/edit-quiz', [InstructorController::class, 'edit_quiz']);
});


// Application router
// Enterprise router in application
Route::group(['prefix' => 'enterprise'], function () {
    Route::get('/erp-dashboard', [EnterpriseController::class, 'erp_dashboard']);
    Route::get('/crm-dashboard', [EnterpriseController::class, 'crm_dashboard']);
    Route::get('/hr-dashboard', [EnterpriseController::class, 'hr_dashboard']);
    Route::get('/employees', [EnterpriseController::class, 'employees']);
    Route::get('/staff', [EnterpriseController::class, 'staff']);
    Route::get('/leaves', [EnterpriseController::class, 'leaves']);
});

Route::group(['prefix' => 'account'], function () {
    Route::get('/pricing', [AccountController::class, 'pricing']);
    Route::get('/policy', [AccountController::class, 'policy'])->name('policy');
    Route::get('/login', [AccountController::class, 'login'])->name('login');
    Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
    Route::post('/login', [AccountController::class, 'authenticate'])->name('postlogin');
    Route::get('/signup', [AccountController::class, 'signup'])->name('signup');
    Route::post('/signup', [AccountController::class, 'postsignup'])->name('postsignup');
    Route::get('/verify/{code}', [AccountController::class, 'verify'])->name('verify');
    Route::get('/send-verify/{email}', [AccountController::class, 'sendVerify']);
    Route::get('/signup-payment', [AccountController::class, 'signup_payment'])->name('signup_payment');
    Route::get('/forgot-password', [AccountController::class, 'forgot_password'])->name('forgot_password');
    Route::get('/change-password', [AccountController::class, 'change_password'])->name('change_password');
    Route::post('/change-password', [AccountController::class, 'post_change_password'])->name('post_change_password');
    Route::get('/edit-account', [AccountController::class, 'edit_account']);
    Route::get('/edit-account-profile', [AccountController::class, 'profile_privacy']);
    Route::get('/edit-account-notification', [AccountController::class, 'email_notification']);
    Route::get('/edit-account-password', [AccountController::class, 'account_password']);
    Route::get('/billing', [AccountController::class, 'billing']);
    Route::get('/billing-upgrade', [AccountController::class, 'billing_upgrade']);
    Route::get('/billing-payment', [AccountController::class, 'billing_payment']);
    Route::get('/billing-history', [AccountController::class, 'billing_history']);
    Route::get('/billing-invoice', [AccountController::class, 'billing_invoice']);
});

// Community router
Route::group(['prefix' => 'community'], function () {
    Route::get('/teachers', [CommunityController::class, 'teacher']);
    Route::get('/teacher-profile', [CommunityController::class, 'teacher_profile']);
    Route::get('/student', [CommunityController::class, 'student']);
    Route::get('/blog', [CommunityController::class, 'blog']);
    Route::get('/blog-post', [CommunityController::class, 'blog_post']);
    Route::get('/faq', [CommunityController::class, 'faq']);
    Route::get('/help-center', [CommunityController::class, 'helpcenter']);
    Route::get('/discussions', [CommunityController::class, 'discussions']);
    Route::get('/discussion', [CommunityController::class, 'discussion_detail']);
    Route::get('/discussions-ask', [CommunityController::class, 'discussions_ask']);
});


Route::get('/redirect/{social}', [AccountController::class, 'redirect'])->name('redirect');
Route::get('/callback/{social}', [AccountController::class, 'callback'])->name('callback');
