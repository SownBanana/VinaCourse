<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TakeController extends Controller
{
    public function takecourse() {
        return view('student.take.course');
    }

    public function takelesson() {
        return view('student.take.lesson');
    }

    public function takequiz() {
        return view('student.take.quiz');
    }

    public function myquizzes() {
        return view('student.take.my-quizzes');
    }

    public function quizresult() {
        return view('student.take.quiz-result');
    }
}
