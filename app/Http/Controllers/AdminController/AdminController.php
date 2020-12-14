<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Account;

class AdminController extends Controller
{
    public function getIndex() {
        return view('admin.index');
    }

    public function getUser() {
        $accounts = Account::orderBy('created_at', 'desc')->paginate(15);
        // dd($accounts);
        return view('admin.user.user', ['accounts' => $accounts]);
    }

    public function allCourse() {
        $courses = Course::orderBy('created_at', 'desc')->paginate(8);
        $course = Course::count();
        $students = Account::where('role', 3)->count();
        $instructors = Account::where('role', 2)->count();
        return view('admin.course.course', ['courses' => $courses, 'students' => $students, 'instructors'=>$instructors, 'course'=>$course]);
    }

    public function getCourseDetail($id) {
        $course = Course::where('id' , $id)->get();
        // dd($course);
        return view('admin.course.detail_course', ['course' => $course]);
    }
}
