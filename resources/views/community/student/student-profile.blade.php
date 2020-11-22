@extends('layout.app')

@section('content')
<div class="page-section bg-primary border-bottom-white">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
        <img src="assets/images/illustration/student/128/white.svg" width="104" class="mr-md-32pt mb-32pt mb-md-0" alt="student">
        <div class="flex mb-32pt mb-md-0">
            <h2 class="text-white mb-0">Laza Bogdan</h2>
            <p class="lead text-white-50 d-flex align-items-center">Student <span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span></p>
        </div>
        <a href="" class="btn btn-outline-white">Follow</a>
    </div>
</div>

<div class="page-section bg-primary">
    <div class="container page__container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card border-0 mb-lg-0">
                    <div class="card-header d-flex align-items-center">
                        <div class="h2 mb-0 mr-3">116</div>
                        <div class="flex">
                            <p class="card-title">Angular</p>
                            <p class="card-subtitle text-50">Best score</p>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Popular Topics</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item">Popular Topics</a>
                                <a href="" class="dropdown-item">Web Design</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-24pt">
                        <div class="chart" style="height: 344px;">
                            <canvas id="topicIqChart" class="chart-canvas js-update-chart-line" data-chart-hide-axes="true" data-chart-points="true" data-chart-suffix=" points" data-chart-line-border-color="primary"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">






                <div id="carouselExampleFade" class="carousel carousel-card slide mb-24pt">
                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <a class="card border-0 mb-0" href="">
                                <img src="assets/images/achievements/flinto.png" alt="Flinto" class="card-img" style="max-height: 100%; width: initial;">
                                <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                                    <span class="row flex-nowrap">
                                        <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                            <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                            <span class="text-white-60 d-block mb-24pt">Jun 5, 2018</span>
                                        </span>
                                        <span class="col d-flex flex-column">
                                            <span class="text-right flex mb-16pt">
                                                <img src="assets/images/paths/flinto_40x40@2x.png" width="64" alt="Flinto" class="rounded">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="row flex-nowrap">
                                        <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                            <img src="assets/images/illustration/achievement/128/white.png" width="64" alt="achievement">
                                        </span>
                                        <span class="col d-flex flex-column">
                                            <span>
                                                <span class="card-title text-white mb-4pt d-block">Flinto</span>
                                                <span class="text-white-60">Introduction to The App Design Application</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>

                        </div>

                        <div class="carousel-item">

                            <a class="card border-0 mb-0" href="">
                                <img src="assets/images/achievements/angular.png" alt="Angular fundamentals" class="card-img" style="max-height: 100%; width: initial;">
                                <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                                    <span class="row flex-nowrap">
                                        <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                            <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                            <span class="text-white-60 d-block mb-24pt">Jun 5, 2018</span>
                                        </span>
                                        <span class="col d-flex flex-column">
                                            <span class="text-right flex mb-16pt">
                                                <img src="assets/images/paths/angular_64x64.png" width="64" alt="Angular fundamentals" class="rounded">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="row flex-nowrap">
                                        <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                            <img src="assets/images/illustration/achievement/128/white.png" width="64" alt="achievement">
                                        </span>
                                        <span class="col d-flex flex-column">
                                            <span>
                                                <span class="card-title text-white mb-4pt d-block">Angular fundamentals</span>
                                                <span class="text-white-60">Creating and Communicating Between Angular Components</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>

                        </div>

                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
<span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_left</span>
<span class="sr-only">Previous</span>
</a> -->
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="card border-0 mb-lg-0">
                    <div class="card-header d-flex align-items-center border-0">
                        <div class="h2 mb-0 mr-3">432</div>
                        <div class="flex">
                            <p class="card-title">Experience IQ</p>
                            <p class="card-subtitle text-50">4 days streak this week</p>
                        </div>
                        <i class="material-icons text-muted ml-2">trending_up</i>
                    </div>
                    <div class="card-body pt-0">
                        <div class="chart" style="height: 128px;">
                            <canvas id="iqChart" class="chart-canvas js-update-chart-line" data-chart-hide-axes="false" data-chart-points="true" data-chart-suffix="pt" data-chart-line-border-color="primary"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-section bg-white border-bottom-2">
    <div class="container page__container">
        <div class="row">
            <div class="col-md-6">
                <h4>About me</h4>
                <p class="text-70">Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>
            </div>
            <div class="col-md-6">
                <h4>Connect</h4>
                <p class="text-70">I’m currently working as a freelance marketing director and always interested in a challenge. Here’s how to reach out and connect.</p>
                <div class="d-flex align-items-center">
                    <a href="" class="text-accent fab fa-facebook-square font-size-24pt mr-8pt"></a>
                    <a href="" class="text-accent fab fa-twitter-square font-size-24pt"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-section">
    <div class="container page__container">



        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-1">
                    <div class="avatar avatar-sm mr-3">
                        <!-- <img src="assets/images/people/50/guy-2.jpg" alt="Avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">LB</span>
                    </div>
                    <div class="flex">
                        <div class="d-flex align-items-center mb-1">
                            <strong class="card-title">Laza Bogdan</strong>
                            <small class="ml-auto text-muted">3 days ago</small>
                        </div>
                        <div>
                            <p class="measure-lead">Thanks for contributing to the release of LearnPlus - Learning Management Template <a href="">https://www.frontendmatter.com/themes/learnpl...</a> 🔥</p>
                            <p><a href="">#themeforest</a> <a href="">#EnvatoMarket</a></p>
                        </div>

                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="" class="text-muted d-flex align-items-center text-decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 26</a>
                    <a href="" class="text-muted d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 123</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-1">
                    <div class="avatar avatar-sm mr-3">
                        <!-- <img src="assets/images/people/50/woman-5.jpg" alt="Avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">LB</span>
                    </div>
                    <div class="flex">
                        <div class="d-flex align-items-center mb-1">
                            <strong class="card-title">Laza Bogdan</strong>
                            <small class="ml-auto text-muted">4 days ago</small>
                        </div>
                        <div>
                            <p class="measure-lead">Checkout our new JVC camera course on <a href="">https://t.co/Wh7jE0yz4h</a> 😉
                        </div>

                        <a href="" class="card my-3 text-body text-decoration-0 measure-lead">
                            <img src="assets/images/stories/256_rsz_phil-hearing-769014-unsplash.jpg" alt="image" class="card-img-top">
                            <span class="card-footer d-flex flex-column">
                                <strong>Learn How To Operate a JVC Camera</strong>
                                <span class="text-black-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                <span class="text-muted">frontendmatter.com</span>
                            </span>
                        </a>

                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="" class="text-muted d-flex align-items-center text-decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 156</a>
                    <a href="" class="text-muted d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 351</a>
                </div>
            </div>
        </div>


        <a href="" class="btn btn-block btn-light mb-32pt">Load more ...</a>
    </div>
</div>
@endsection

@section('drawer')
      <!-- drawer -->
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
                    <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                    <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                        <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                    </span>

                    <span>Luma</span>
                </a>



                <div class="sidebar-heading">Student</div>
                <ul class="sidebar-menu">


                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="index">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                            <span class="sidebar-menu-text">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="courses">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                            <span class="sidebar-menu-text">Browse Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="paths">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                            <span class="sidebar-menu-text">Browse Paths</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-dashboard">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                            <span class="sidebar-menu-text">Student Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-my-courses">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                            <span class="sidebar-menu-text">My Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-paths">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                            <span class="sidebar-menu-text">My Paths</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-path">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                            <span class="sidebar-menu-text">Path Details</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-course">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                            <span class="sidebar-menu-text">Course Preview</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-lesson">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                            <span class="sidebar-menu-text">Lesson Preview</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-take-course">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                            <span class="sidebar-menu-text">Take Course</span>
                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-take-lesson">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                            <span class="sidebar-menu-text">Take Lesson</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-take-quiz">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                            <span class="sidebar-menu-text">Take Quiz</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-quiz-results">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                            <span class="sidebar-menu-text">My Quizzes</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-quiz-result-details">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                            <span class="sidebar-menu-text">Quiz Result</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-path-assessment">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                            <span class="sidebar-menu-text">Skill Assessment</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="student-path-assessment-result">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                            <span class="sidebar-menu-text">Skill Result</span>
                        </a>
                    </li>

                </ul>
                <div class="sidebar-heading">Instructor</div>
                <ul class="sidebar-menu">


                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="instructor-dashboard">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                            <span class="sidebar-menu-text">Instructor Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="instructor-courses">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                            <span class="sidebar-menu-text">Manage Courses</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="instructor-quizzes">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                            <span class="sidebar-menu-text">Manage Quizzes</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="instructor-earnings">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                            <span class="sidebar-menu-text">Earnings</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="instructor-statement">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                            <span class="sidebar-menu-text">Statement</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="instructor-edit-course">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                            <span class="sidebar-menu-text">Edit Course</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="instructor-edit-quiz">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                            <span class="sidebar-menu-text">Edit Quiz</span>
                        </a>
                    </li>

                </ul>




                <div class="sidebar-heading">Applications</div>
                <ul class="sidebar-menu">



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
                            <li class="sidebar-menu-item active">
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
                            <li class="sidebar-menu-item">
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
                                <a class="sidebar-menu-button" href="compact-student-profile">
                                    <span class="sidebar-menu-text">Compact</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="mini-student-profile">
                                    <span class="sidebar-menu-text">Mini</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="mini-secondary-student-profile">
                                    <span class="sidebar-menu-text">Mini + Secondary</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="student-profile">
                                    <span class="sidebar-menu-text">App</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="boxed-student-profile">
                                    <span class="sidebar-menu-text">Boxed</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="sticky-student-profile">
                                    <span class="sidebar-menu-text">Sticky</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-profile">
                                    <span class="sidebar-menu-text">Fixed</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>
        </div>
    </div>
    <!-- // END drawer -->
@endsection