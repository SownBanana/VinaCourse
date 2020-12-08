<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex() {
        return view('admin.index');
    }

    public function getUser() {
        return view('admin.user.user');
    }

    public function allCourse() {
        return view('admin.course.course');
    }

    public function getCourseDetail() {
        return view('admin.course.detail_course');
    }
}
