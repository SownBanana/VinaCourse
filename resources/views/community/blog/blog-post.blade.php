@extends('layout.app')

@section('content')
<div class="page-section bg-body border-bottom-2">
    <div class="container page__container">

        <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start flex mb-16pt text-center text-md-left">
            <div class="avatar overlay overlay--primary mb-16pt mb-md-0 mr-md-16pt">
                <img src="assets/images/paths/sketch_40x40@2x.png" class="avatar-img rounded" alt="lesson">
                <div class="overlay__content"></div>
            </div>
            <div class="flex">
                <h1 class="h2 measure-lead-max mb-16pt">Merge Duplicates in Sketch - Inconsistent Symbols &amp; Styles</h1>
                <div class="d-flex align-items-center">
                    <a href="teacher-profile" class="avatar avatar-sm mr-12pt">
                        <img src="assets/images/people/50/guy-6.jpg" alt="author" class="avatar-img rounded-circle">
                    </a>
                    <div class="mr-16pt">
                        <a href="teacher-profile" class="card-title">Eddie Bryan</a>
                        <div class="d-flex align-items-center">
                            <small class="text-50 mr-2">3 days ago</small>
                            <small class="text-50 mr-2">2 min read</small>
                            <a href="" class="text-50"><small>Liked</small></a>
                        </div>
                    </div>
                    <div>
                        <a href="" class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons icon--left">favorite_border</i> 3</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="page-section border-bottom-2">
    <div class="container page__container">

        <div class="mb-24pt">
            <a href="" class="chip chip-outline-secondary">Design</a>
            <a href="" class="chip chip-outline-secondary">Sketch</a>
        </div>

        <div class="d-flex flex-column flex-md-row align-items-md-center mb-16pt">
            <div class="mb-16pt mb-md-0 mr-md-16pt">
                <div class="rounded p-relative o-hidden overlay overlay--primary">
                    <img class="img-fluid rounded" src="assets/images/paths/sketch_200x168.png" alt="image">
                    <div class="overlay__content"></div>
                </div>
            </div>
            <div class="flex">
                <p class="lead measure-paragraph-max">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus culpa deserunt distinctio, eos expedita inventore labore laborum libero magnam nisi recusandae sapiente sunt unde, voluptatibus? Accusantium distinctio laborum nihil, nostrum possimus quos rem repellendus tenetur voluptatem! A, ad adipisci commodi doloribus id maxime provident quo suscipit. Itaque, recusandae ut.</p>
            </div>
        </div>

        <blockquote class="blockquote blockquote--reverse pl-0">
            <p class="text-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis distinctio earum et fugiat id itaque officia provident quasi! Dolorem, fuga modi molestias natus non nulla optio porro praesentium provident quaerat.</p>
            <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
            </footer>
        </blockquote>

        <p class="text-50 measure-paragraph-max mb-24pt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dignissimos eaque facilis inventore ipsa modi natus, optio quisquam quod quos, ratione sed, ullam veritatis. Delectus dolorem doloremque, doloribus explicabo facere fugiat, incidunt ipsam maiores minima modi molestias natus quia quis recusandae rem reprehenderit saepe sint sunt tenetur velit voluptate voluptatum!</p>

        <h4>Labore nemo nisi recusandae</h4>

        <div class="d-flex flex-column flex-md-row mb-32pt">
            <div class="flex mb-16pt mb-md-0 mr-md-16pt">
                <p class="lead text-70 measure-paragraph-max">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus culpa deserunt distinctio, eos expedita inventore labore laborum libero magnam nisi recusandae sapiente sunt unde, voluptatibus? Accusantium distinctio laborum nihil, nostrum possimus quos rem repellendus tenetur voluptatem! A, ad adipisci commodi doloribus id maxime provident quo suscipit. Itaque, recusandae ut.</p>

                <blockquote class="blockquote">
                    <p class="text-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque debitis distinctio earum et fugiat id itaque officia provident quasi! Dolorem, fuga modi molestias natus non nulla optio porro praesentium provident quaerat.</p>
                    <footer class="blockquote-footer">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
            <div>
                <div class="rounded p-relative o-hidden overlay overlay--primary">
                    <img class="img-fluid rounded" src="assets/images/paths/invision_200x168.png" alt="image">
                    <div class="overlay__content"></div>
                </div>
            </div>
        </div>

        <div class="measure-lead-max">


            <div class="mb-8pt">
                <div class="page-separator">
                    <div class="page-separator__text">Author</div>
                </div>

                <div class="media align-items-center mb-16pt">
                    <span class="media-left mr-16pt">
                        <img src="assets/images/people/50/guy-6.jpg" width="40" alt="avatar" class="rounded-circle">
                    </span>
                    <div class="media-body">
                        <a class="card-title m-0" href="teacher-profile">Eddie Bryan</a>
                        <p class="text-50 lh-1 mb-0">Instructor</p>
                    </div>
                </div>
                <p class="text-70">Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>

                <a href="teacher-profile" class="btn btn-white mb-24pt">Follow</a>
            </div>


            <div class="page-separator">
                <div class="page-separator__text">Comments</div>
            </div>

            <div class="d-flex mb-24pt">
                <a href="" class="avatar avatar-sm mr-12pt">
                    <span class="avatar-title rounded-circle">LB</span>
                </a>
                <div class="flex">
                    <div class="form-group">
                        <label for="comment" class="form-label">Your comment</label>
                        <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Type here to leave a comment ..."></textarea>
                    </div>
                    <button class="btn btn-outline-secondary">Post comment</button>
                </div>
            </div>
            <div class="pt-3 mb-24pt">
                <h4>2 Comments</h4>
                <div class="d-flex mb-3">
                    <a href="" class="avatar avatar-sm mr-12pt">
                        <!-- <img src="assets/images/people/256/256_rsz_karl-s-973833-unsplash.jpg" alt="people" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">JF</span>
                    </a>
                    <div class="flex">
                        <a href="" class="text-body"><strong>Joseph S. Ferland</strong></a><br>
                        <p class="mt-1 text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero neque magnam modi corrupti in aliquid odit eligendi pariatur! Ad consequatur illo voluptates, dignissimos tenetur odit magni excepturi! Nesciunt, fuga, vel.</p>
                        <div class="d-flex align-items-center">
                            <small class="text-50 mr-2">27 min ago</small>
                            <a href="" class="text-50"><small>Liked</small></a>
                        </div>
                    </div>
                </div>

                <div class="ml-sm-32pt mt-3 card p-3">
                    <div class="d-flex">
                        <a href="#" class="avatar avatar-sm mr-12pt">
                            <!-- <img src="assets/images/people/110/guy-6.jpg" alt="Guy" class="avatar-img rounded-circle"> -->
                            <span class="avatar-title rounded-circle">FM</span>
                        </a>
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <a href="" class="text-body"><strong>FrontendMatter</strong></a>
                                <small class="ml-auto text-muted">just now</small>
                            </div>
                            <p class="mt-1 text-70">Hi Joseph,<br> Thank you for purchasing our course! <br><br>Please have a look at the charts library documentation <a href="#">here</a> and follow the instructions.</p>

                            <div class="d-flex align-items-center">
                                <a href="" class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 3</a>
                                <a href="" class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 13</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="" class="btn btn-block btn-light">Load more ...</a>
            </div>
        </div>

    </div>
</div>

<div class="page-section bg-white">
    <div class="container page__container">


        <div class="page-separator">
            <div class="page-separator__text">Feedback</div>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">

                <div class="card card-feedback card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                    </blockquote>
                </div>
                <div class="media ml-12pt">
                    <div class="media-left mr-12pt">
                        <a href="student-profile" class="avatar avatar-sm">
                            <!-- <img src="assets/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                            <span class="avatar-title rounded-circle">UK</span>
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <a href="student-profile" class="card-title">Umberto Kass</a>
                        <div class="rating mt-4pt">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 col-md-4">

                <div class="card card-feedback card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                    </blockquote>
                </div>
                <div class="media ml-12pt">
                    <div class="media-left mr-12pt">
                        <a href="student-profile" class="avatar avatar-sm">
                            <!-- <img src="assets/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                            <span class="avatar-title rounded-circle">UK</span>
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <a href="student-profile" class="card-title">Umberto Kass</a>
                        <div class="rating mt-4pt">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 col-md-4">

                <div class="card card-feedback card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                    </blockquote>
                </div>
                <div class="media ml-12pt">
                    <div class="media-left mr-12pt">
                        <a href="student-profile" class="avatar avatar-sm">
                            <!-- <img src="assets/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                            <span class="avatar-title rounded-circle">UK</span>
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <a href="student-profile" class="card-title">Umberto Kass</a>
                        <div class="rating mt-4pt">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@section('drawer')
<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>


            <div class="d-flex align-items-center navbar-height">
                <form action="index" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                    <input type="text" class="form-control pl-0" placeholder="Search">
                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                </form>
            </div>



            <a href="index" class="sidebar-brand ">
                <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="VinaCourse"> -->

                <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                    <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                </span>

                <span>VinaCourse</span>
            </a>






            <div class="sidebar-heading">Applications</div>
            <ul class="sidebar-menu">

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#student_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                        Student
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="student_menu">


                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="index">

                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="courses">

                                <span class="sidebar-menu-text">Browse Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="paths">

                                <span class="sidebar-menu-text">Browse Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-dashboard">

                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-my-courses">

                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-paths">

                                <span class="sidebar-menu-text">My Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-path">

                                <span class="sidebar-menu-text">Path Details</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-course">

                                <span class="sidebar-menu-text">Course Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-lesson">

                                <span class="sidebar-menu-text">Lesson Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-take-course">

                                <span class="sidebar-menu-text">Take Course</span>
                                <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-take-lesson">

                                <span class="sidebar-menu-text">Take Lesson</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-take-quiz">

                                <span class="sidebar-menu-text">Take Quiz</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-quiz-results">

                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-quiz-result-details">

                                <span class="sidebar-menu-text">Quiz Result</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-path-assessment">

                                <span class="sidebar-menu-text">Skill Assessment</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-path-assessment-result">

                                <span class="sidebar-menu-text">Skill Result</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#instructor_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                        Instructor
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="instructor_menu">


                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-dashboard">

                                <span class="sidebar-menu-text">Instructor Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-courses">

                                <span class="sidebar-menu-text">Manage Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-quizzes">

                                <span class="sidebar-menu-text">Manage Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-earnings">

                                <span class="sidebar-menu-text">Earnings</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-statement">

                                <span class="sidebar-menu-text">Statement</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-edit-course">

                                <span class="sidebar-menu-text">Edit Course</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="instructor-edit-quiz">

                                <span class="sidebar-menu-text">Edit Quiz</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                        Enterprise
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="erp-dashboard">
                                <span class="sidebar-menu-text">ERP Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="crm-dashboard">
                                <span class="sidebar-menu-text">CRM Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="hr-dashboard">
                                <span class="sidebar-menu-text">HR Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="employees">
                                <span class="sidebar-menu-text">Employees</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="staff">
                                <span class="sidebar-menu-text">Staff</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="leaves">
                                <span class="sidebar-menu-text">Leaves</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button disabled" href="departments">
                                <span class="sidebar-menu-text">Departments</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="documents">
<span class="sidebar-menu-text">Documents</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="attendance">
<span class="sidebar-menu-text">Attendance</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="recruitment">
<span class="sidebar-menu-text">Recruitment</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="payroll">
<span class="sidebar-menu-text">Payroll</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="training">
<span class="sidebar-menu-text">Training</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="employee-profile">
<span class="sidebar-menu-text">Employee Profile</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="accounting">
<span class="sidebar-menu-text">Accounting</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="inventory">
<span class="sidebar-menu-text">Inventory</span>
</a>
</li> -->
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#productivity_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                        Productivity
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="projects">
                                <span class="sidebar-menu-text">Projects</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="tasks-board">
                                <span class="sidebar-menu-text">Tasks Board</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="tasks-list">
                                <span class="sidebar-menu-text">Tasks List</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button disabled" href="kanban">
                                <span class="sidebar-menu-text">Kanban</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="task-details">
<span class="sidebar-menu-text">Task Details</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="team-members">
<span class="sidebar-menu-text">Team Members</span>
</a>
</li> -->
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#ecommerce_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                        eCommerce
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="ecommerce_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ecommerce">
                                <span class="sidebar-menu-text">Shop Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button disabled" href="edit-product">
                                <span class="sidebar-menu-text">Edit Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#messaging_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                        Messaging
                        <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span>
                        <span class="sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="messaging_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="messages">
                                <span class="sidebar-menu-text">Messages</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="email">
                                <span class="sidebar-menu-text">Email</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                        CMS
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="cms-dashboard">
                                <span class="sidebar-menu-text">CMS Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="posts">
                                <span class="sidebar-menu-text">Posts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                        Account
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="pricing">
                                <span class="sidebar-menu-text">Pricing</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="login">
                                <span class="sidebar-menu-text">Login</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="signup">
                                <span class="sidebar-menu-text">Signup</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="signup-payment">
                                <span class="sidebar-menu-text">Payment</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="reset-password">
                                <span class="sidebar-menu-text">Reset Password</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="change-password">
                                <span class="sidebar-menu-text">Change Password</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account">
                                <span class="sidebar-menu-text">Edit Account</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account-profile">
                                <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account-notifications">
                                <span class="sidebar-menu-text">Email Notifications</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account-password">
                                <span class="sidebar-menu-text">Account Password</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="billing">
                                <span class="sidebar-menu-text">Subscription</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="billing-upgrade">
                                <span class="sidebar-menu-text">Upgrade Account</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="billing-payment">
                                <span class="sidebar-menu-text">Payment Information</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="billing-history">
                                <span class="sidebar-menu-text">Payment History</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="billing-invoice">
                                <span class="sidebar-menu-text">Invoice</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-menu-item active open">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#community_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                        Community
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse show sm-indent" id="community_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="teachers">

                                <span class="sidebar-menu-text">Browse Teachers</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="student-profile">

                                <span class="sidebar-menu-text">Student Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="teacher-profile">

                                <span class="sidebar-menu-text">Teacher Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="blog">

                                <span class="sidebar-menu-text">Blog</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="blog-post">

                                <span class="sidebar-menu-text">Blog Post</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="faq">
                                <span class="sidebar-menu-text">FAQ</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="help-center">
                                <!--  -->
                                <span class="sidebar-menu-text">Help Center</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="discussions">
                                <span class="sidebar-menu-text">Discussions</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="discussion">
                                <span class="sidebar-menu-text">Discussion Details</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="discussions-ask">
                                <span class="sidebar-menu-text">Ask Question</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>


            <div class="sidebar-heading">UI</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                        Components
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-buttons">
                                <span class="sidebar-menu-text">Buttons</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-avatars">
                                <span class="sidebar-menu-text">Avatars</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-forms">
                                <span class="sidebar-menu-text">Forms</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-loaders">
                                <span class="sidebar-menu-text">Loaders</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-tables">
                                <span class="sidebar-menu-text">Tables</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-cards">
                                <span class="sidebar-menu-text">Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-icons">
                                <span class="sidebar-menu-text">Icons</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-tabs">
                                <span class="sidebar-menu-text">Tabs</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-alerts">
                                <span class="sidebar-menu-text">Alerts</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-badges">
                                <span class="sidebar-menu-text">Badges</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-progress">
                                <span class="sidebar-menu-text">Progress</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-pagination">
                                <span class="sidebar-menu-text">Pagination</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="ui-typography">
<span class="sidebar-menu-text">Typography</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="ui-colors">
<span class="sidebar-menu-text">Colors</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="ui-breadcrumb">
<span class="sidebar-menu-text">Breadcrumb</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="ui-accordions">
<span class="sidebar-menu-text">Accordions</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="ui-modals">
<span class="sidebar-menu-text">Modals</span>
</a>
</li>
<li class="sidebar-menu-item">
<a class="sidebar-menu-button disabled" href="ui-chips">
<span class="sidebar-menu-text">Chips</span>
</a>
</li> -->
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button disabled" href="">
                                <span class="sidebar-menu-text">Disabled</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#plugins_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                        Plugins
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="plugins_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-charts">
                                <span class="sidebar-menu-text">Charts</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-flatpickr">
                                <span class="sidebar-menu-text">Flatpickr</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-daterangepicker">
                                <span class="sidebar-menu-text">Date Range Picker</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-dragula">
                                <span class="sidebar-menu-text">Dragula</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-dropzone">
                                <span class="sidebar-menu-text">Dropzone</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-range-sliders">
                                <span class="sidebar-menu-text">Range Sliders</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-quill">
                                <span class="sidebar-menu-text">Quill</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-select2">
                                <span class="sidebar-menu-text">Select2</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-nestable">
                                <span class="sidebar-menu-text">Nestable</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-fancytree">
                                <span class="sidebar-menu-text">Fancy Tree</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-maps-vector">
                                <span class="sidebar-menu-text">Vector Maps</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-sweet-alert">
                                <span class="sidebar-menu-text">Sweet Alert</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="ui-plugin-toastr">
                                <span class="sidebar-menu-text">Toastr</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button disabled" href="">
                                <span class="sidebar-menu-text">Disabled</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                        Layouts
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="layouts_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="compact-blog-post">
                                <span class="sidebar-menu-text">Compact</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="mini-blog-post">
                                <span class="sidebar-menu-text">Mini</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="mini-secondary-blog-post">
                                <span class="sidebar-menu-text">Mini + Secondary</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="blog-post">
                                <span class="sidebar-menu-text">App</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="boxed-blog-post">
                                <span class="sidebar-menu-text">Boxed</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="sticky-blog-post">
                                <span class="sidebar-menu-text">Sticky</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-blog-post">
                                <span class="sidebar-menu-text">Fixed</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>


        </div>
    </div>
</div>
@endsection