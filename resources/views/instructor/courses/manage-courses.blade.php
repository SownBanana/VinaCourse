@extends('layout.app')
@section('active-manage_courses', 'active')
@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Quản lý khoá học</h2>
                
                <ol class="breadcrumb p-0 m-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    
                <li class="breadcrumb-item active">
                    Quản lý khoá học
                </li>

                </ol>
                
            </div>
        </div>
        
        
        <div class="row add_button" role="tablist">
            <div class="col-auto">
                <a class="btn btn-outline-secondary add_course_btn" onclick="addCourse()">Thêm khoá học</a>
            </div>
        </div>
        
    </div>
</div>
<div id= "manage_course" class="content_layout active">
    <div class="container page__container page-section">


        <div class="page-separator">
            <div class="page-separator__text">Development Courses</div>
        </div>
    
    
    
        <div class="row">
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " {{--data-overlay-onload-show data-popover-onload-show data-force-reveal--}} data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="">
                        <img src="assets/images/paths/angular_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Learn Angular fundamentals</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Learn Angular fundamentals</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="">
                        <img src="assets/images/paths/swift_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Build an iOS Application in Swift</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Build an iOS Application in Swift</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="">
                        <img src="assets/images/paths/wordpress_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Build a WordPress Website</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Build a WordPress Website</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="left">
                        <img src="assets/images/paths/react_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Become a React Native Developer</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Become a React Native Developer</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
        <div class="mb-32pt">
    
    
            <ul class="pagination justify-content-start pagination-xsm m-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                        <span>Prev</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Page 1">
                        <span>1</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Page 2">
                        <span>2</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span>Next</span>
                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>
    
        </div>
    
        <div class="page-separator">
            <div class="page-separator__text">Design Courses</div>
        </div>
    
    
    
        <div class="row">
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="">
                        <img src="assets/images/paths/sketch_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Learn Sketch</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/sketch_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Learn Sketch</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="">
                        <img src="assets/images/paths/flinto_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Learn Flinto</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/flinto_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Learn Flinto</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="">
                        <img src="assets/images/paths/photoshop_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Learn Photoshop</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/photoshop_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Learn Photoshop</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
            <div class="col-sm-6 col-md-4 col-xl-3">
    
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="instructor-edit-course" class="js-image" data-position="">
                        <img src="assets/images/paths/mailchimp_430x168.png" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Edit</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="instructor-edit-course">Newsletter Design</a>
                                </div>
                                <a href="instructor-edit-course" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div class="d-flex">
                                <div class="rating flex">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <small class="text-black-50">6 hours</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="assets/images/paths/mailchimp_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Newsletter Design</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">with</span>
                                <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>
    
                    <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>
    
                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>
    
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="instructor-edit-course" class="btn btn-primary">Edit course</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
    
    
        <ul class="pagination justify-content-start pagination-xsm m-0">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                    <span>Prev</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Page 1">
                    <span>1</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Page 2">
                    <span>2</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span>Next</span>
                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div id="edit_course" class="content_layout" course_id="new">
    <div class="page-section border-bottom-2">
        <div class="container page__container">
            <div class="row">
                <div class="col-md-8">
                    @csrf
                    <div class="page-separator">
                        <div class="page-separator__text">Thông tin cơ bản</div>
                    </div>
                    <label class="form-label">Tên khoá học</label>
                    <div class="form-group mb-24pt">
                        <input id="course_name" type="text" class="form-control form-control-lg" placeholder="Tên khoá học..." value="">
                    </div>
                    
                    <div class="form-group mb-32pt">
                        <label class="form-label">Giới thiệu</label>
                        <textarea id="course_intro" class="form-control" rows="5" placeholder="Mô tả khoá học..."></textarea>
                        <small class="form-text text-muted">Đọc <a href="https://viblo.asia/helps/cach-su-dung-markdown-bxjvZYnwkJZ" target="_blank">hướng dẫn </a>để sử dụng markdown</small>
                    </div>

                    <div class="page-separator">
                        <div class="page-separator__text">Chương</div>
                    </div>

                    <div class="accordion js-accordion accordion--boxed mb-24pt" id="parent">
                    </div>

                    <button class="btn btn-outline-secondary mb-24pt mb-sm-0" onclick="addNewSection()">Thêm chương</button>

                </div>
                <div class="col-md-4">

                    <div class="page-separator">
                        <div class="page-separator__text">Options</div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            
                            <div class="form-group mb-0">
                                <label class="form-label" for="select_topic">Topics</label>
                                <ul class="d-flex topic_list">
                                </ul>
                                <select id="select_topic" size="7" data-toggle="select" multiple class="form-control">
                                    <option>JavaScript</option>
                                    <option>Angular</option>
                                    <option>Bootstrap</option>
                                    <option>CSS</option>
                                    <option>HTML</option>
                                </select>
                                <small class="form-text text-muted">Chọn các topic phù hợp với khoá học.</small>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Giá</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group form-inline">
                                            <input id="course_price" type="text" class="form-control" value="200.000">
                                            <span class="input-group-prepend"><span class="input-group-text">VNĐ</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center">
                            <a id="saveCourse" class="btn btn-accent">Lưu thay đổi</a>
                        </div>
                        <div class="list-group list-group-flush">
                            {{-- <div class="list-group-item d-flex">
                                <a class="flex" href="#"><strong>Save Draft</strong></a>
                                <i class="material-icons text-muted">check</i>
                            </div> --}}
                            <div class="list-group-item">
                                <a href="#" class="text-danger"><strong>Xoá khoá học</strong></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
