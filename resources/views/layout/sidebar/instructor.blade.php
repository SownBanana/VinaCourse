@extends('layout.sidebar.sidebar')
@section('sidebar_content')
<div class="sidebar-heading">Giáo viên</div>
<ul class="sidebar-menu">

    <li class="sidebar-menu-item @yield('active-dashboard')">
        <a class="sidebar-menu-button" href="instructor/a/dashboard">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
            <span class="sidebar-menu-text">My Dashboard</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-manage_course')">
        <a class="sidebar-menu-button" href="instructor/a/manage-courses">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
            <span class="sidebar-menu-text">Quản lý khoá học</span>
        </a>
    </li>
    {{-- <li class="sidebar-menu-item @yield('active-manage_quiz')">
        <a class="sidebar-menu-button" href="instructor/manage-quizzes">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
            <span class="sidebar-menu-text">Quản lý Quizzes</span>
        </a>
    </li> --}}
    <li class="sidebar-menu-item @yield('active-earnings')">
        <a class="sidebar-menu-button" href="instructor/a/earning">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
            <span class="sidebar-menu-text">Thu nhập</span>
        </a>
    </li>
    <li class="sidebar-menu-item @yield('active-statement')">
        <a class="sidebar-menu-button" href="instructor/a/statement">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
            <span class="sidebar-menu-text">Hoá đơn</span>
        </a>
    </li>
    {{-- <li class="sidebar-menu-item @yield('active-edit_course')">
        <a class="sidebar-menu-button" href="instructor/edit-course">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
            <span class="sidebar-menu-text">Chỉnh sửa khoá học</span>
        </a>
    </li> --}}
    {{-- <li class="sidebar-menu-item @yield('active-edit_quiz')">
        <a class="sidebar-menu-button" href="instructor/edit-quiz">
            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
            <span class="sidebar-menu-text">Edit Quiz</span>
        </a>
    </li> --}}

</ul>
@endsection

