<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Topic;
use App\Models\Section;
use App\Models\Student;
use App\Models\Lesson;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function dashboard($username)
    {
        return view('student.dashboard.index');
    }

    public function course_preview($id)
    {
        $course = Course::where('id', $id)->first();
        $sections = Section::where('course_id', $id)->orderBy('created_at', 'desc')->get();
        return view('student.course.course-preview', ['course' => $course, 'sections' => $sections]);
    }

    public function browsecourse()
    {
        // $courses = DB::table('courses')->paginate(4);
        $hotCourses = Course::withCount('students')->orderBy('students_count', 'desc')->paginate(4, ['*'], 'hotpage');
        $courses = Course::orderBy('created_at', 'desc')->paginate(8);
        $topics = Topic::get();
        // dd($topics);
        return view('student.course.browse-course', ['hotCourses' => $hotCourses, 'courses' => $courses, 'topics'=>$topics]);
    }

    public function buycourse(Request $request)
    {
        $student = Student::find(Auth::user()->id);
        if (!$student->courses()->where('course_id', $request->course_id)->exists()) {
            $student->courses()->attach($request->course_id);
            return response()->json(['status'=>'success', 'mss'=>'Mua khoá học thanh công']);
        } else {
            return response()->json(['status'=>'false', 'mss'=>'Đã mua khoá học']);
        }
    }

    public function browsepath()
    {
        return view('student.course.browse-path');
    }

    public function mycourse()
    {
        return view('student.course.my-course');
    }

    public function mypath()
    {
        return view('student.course.my-path');
    }

    public function pathdetail()
    {
        return view('student.course.path-detail');
    }

    public function lesson_preview(Request $request)
    {
        $course = Course::where('id', $request->course_id)->with('sections.lessons', 'sections.quizzes.answers')->first();
        return view('student.course.lesson-preview', ['course'=>$course]);
    }

    public function follow(Request $request)
    {
        Student::find(Auth::user()->id)->follow($request->instructor_id);
        return response()->json(['status'=>'Thành công', 'mss'=>'Bạn đã follow người dùng']);
    }
    public function unfollow(Request $request)
    {
        Student::find(Auth::user()->id)->unfollow($request->instructor_id);
        return response()->json(['status'=>'Thành công', 'mss'=>'Bạn đã bỏ follow người dùng']);
    }
}
