<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skillassessment() {
        return view('student.skill.assessment');
    }

    public function skillresult() {
        return view('student.skill.result');
    }
}
