<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function dashboard($username)
    {
        return view('instructor.dashboard.dashboard');
    }

    public function manage_courses()
    {
        return view('instructor.courses.manage-courses');
    }

    public function manage_quizzes()
    {
        return view('instructor.quizzes.manage-quizzes');
    }

    public function earning()
    {
        return view('instructor.earnings.earnings');
    }

    public function statement()
    {
        return view('instructor.statement.statement');
    }

    public function edit_course(Request $request)
    {
        $course = $request->course;
        if ($course['id'] != "new") {
            $a = $course['name'];
        } else {
            $a = $course['name'];
        }
        return view('instructor.courses.edit-courses');
    }

    public function edit_quiz()
    {
        return view('instructor.quizzes.edit-quiz');
    }
}
