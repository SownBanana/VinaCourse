<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function coursepreview()
    {
        return view('student.course.course-preview');
    }

    public function browsecourse()
    {
        return view('student.course.browse-course');
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

    public function lessonpreview()
    {
        return view('student.course.lesson-preview');
    }
}
