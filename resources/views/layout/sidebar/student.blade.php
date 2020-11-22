@extends('layout.sidebar.sidebar')
@section('sidebar_content')
<div class="sidebar-heading">Học sinh</div>
<ul class="sidebar-menu">


    {{-- <li class="sidebar-menu-item @yield('active-home')">
        <a class="sidebar-menu-button" href="index">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
            <span class="sidebar-menu-text">Home</span>
        </a>
    </li> --}}
    <li class="sidebar-menu-item @yield('active-bcourse')">
        <a class="sidebar-menu-button" href="student/{{ Auth::user()->name }}/browse-course">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
            <span class="sidebar-menu-text">Khoá học</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-bpath')">
        <a class="sidebar-menu-button" href="student/{{ Auth::user()->name }}/browse-path">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
            <span class="sidebar-menu-text">Lộ trình</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-dashboard')">
        <a class="sidebar-menu-button" href="student/{{ Auth::user()->name }}/dashboard">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
            <span class="sidebar-menu-text">My Dashboard</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-mcourse')">
        <a class="sidebar-menu-button" href="student/{{ Auth::user()->name }}/my-course">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
            <span class="sidebar-menu-text">Khoá học của tôi</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-mpath')">
        <a class="sidebar-menu-button" href="student/{{ Auth::user()->name }}/my-path">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
            <span class="sidebar-menu-text">Lộ trình của tôi</span>
        </a>
    </li>
    {{-- <li class="sidebar-menu-item @yield('active-pathdetail')">
        <a class="sidebar-menu-button" href="student/path-detial">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
            <span class="sidebar-menu-text">Lộ trình chi tiết</span>
        </a>
    </li> --}}
    {{-- <li class="sidebar-menu-item @yield('active-coursepreview')">
        <a class="sidebar-menu-button" href="student/course-preview">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
            <span class="sidebar-menu-text">Course Preview</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-lesson')">
        <a class="sidebar-menu-button" href="student/lesson-preview">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
            <span class="sidebar-menu-text">Lesson Preview</span>
        </a>
    </li> --}}
    {{-- <li class="sidebar-menu-item @yield('active-takecourse')">
        <a class="sidebar-menu-button" href="student/take-course">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
            <span class="sidebar-menu-text">Take Course</span>
            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-takelesson')">
        <a class="sidebar-menu-button" href="student/take-lesson">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
            <span class="sidebar-menu-text">Take Lesson</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-takequiz')">
        <a class="sidebar-menu-button" href="student/take-quiz">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
            <span class="sidebar-menu-text">Take Quiz</span>
        </a>
    </li> --}}
    <li class="sidebar-menu-item @yield('active-mquiz')">
        <a class="sidebar-menu-button" href="student/{{ Auth::user()->name }}/my-quizzes">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
            <span class="sidebar-menu-text">Quizzes</span>
        </a>
    </li>
    {{-- <li class="sidebar-menu-item @yield('active-quizrs')">
        <a class="sidebar-menu-button" href="student/quiz-result">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
            <span class="sidebar-menu-text">Quiz Result</span>
        </a>
    </li> --}}
    {{-- <li class="sidebar-menu-item @yield('active-skillassess')">
        <a class="sidebar-menu-button" href="student/skill-assessment">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
            <span class="sidebar-menu-text">Đánh giá kỹ năng</span>
        </a>
    </li> --}}
    <li class="sidebar-menu-item @yield('active-skillrs')">
        <a class="sidebar-menu-button" href="student/{{ Auth::user()->name }}/skill-result">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
            <span class="sidebar-menu-text">Kỹ năng</span>
        </a>
    </li>

</ul>
@endsection
