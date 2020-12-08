@extends('layout.app')
@section('active-bcourse', 'active')
@section('content')
@php
    $instructor = App\Models\Account::find($course->instructor_id);
    $isHaveThisCourse = App\Models\Student::find(Auth::user()->id)->courses()->where('course_id', $course->id)->exists();
@endphp
    <div class="mdk-box bg-black js-mdk-box mb-0" data-effects="blend-background" style="overflow: hidden;">
        <div style="background-image: url({!! asset($course->thumbnail_url) !!}); background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
            width: 100%;
            position: absolute;
            filter: blur(4px);
            -webkit-filter: blur(4px);
            opacity:0.5"></div>
        <div class="mdk-box__content">
            <div class="hero py-64pt text-center text-sm-left">
                <div class="container page__container">
                    <h1 class="text-white">{{ $course->name }}</h1>
                    <div style="font-size: 1.2rem; color:white">
                        {!! $course->introduce !!}
                    </div>
                    @if ($isHaveThisCourse)
                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                            <a href="{{route('student_lesson', ['course_id'=>$course->id])}}" class="btn btn-outline-white mb-16pt mb-sm-0 mr-sm-16pt">Học ngay <i class="material-icons icon--right">play_circle_outline</i></a>
                        </div>    
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
        <div class="container page__container">
            <ul class="nav navbar-nav flex align-items-sm-center">
                <li class="nav-item navbar-list__item">
                    <div class="media align-items-center">
                        <span class="media-left mr-16pt">
                            <img src="{!! asset($instructor->avatar_url) .'?'. time()  !!}" width="40" height="40" alt="avatar" class="rounded-circle">
                        </span>
                        <div class="media-body">
                            <a class="card-title m-0" href="{{ route('get_user_home', ['username' => $instructor->username]) }}">{{$instructor->name}}</a>
                            <p class="text-50 lh-1 mb-0">Giảng viên</p>
                        </div>
                    </div>
                </li>
                @php
                    $totalTime = 0;
                    $totalQuizzes = 0;
                    $totalLessons = 0;
                    foreach ($course->sections as $section) {
                        // $totalLessons++;
                        foreach ($section->lessons as $lesson) {
                            $totalLessons++;
                            $totalTime += 30;
                        }
                        $totalQuizzes += count($section->quizzes);
                    }
                @endphp
                <li class="nav-item navbar-list__item">
                    <i class="material-icons text-muted icon--left">schedule</i>
                    {{ floor(($totalTime)*10)/10 }} phút
                </li>
                <li class="nav-item navbar-list__item">
                    <i class="material-icons text-muted icon--left">assessment</i>
                    Programming
                </li>
                <li class="nav-item ml-sm-auto text-sm-center flex-column navbar-list__item">
                    <div class="rating rating-24">
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star_border</i></div>
                    </div>
                    <p class="lh-1 mb-0"><small class="text-muted">20 ratings</small></p>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-section border-bottom-2">
        <div class="container page__container">

            <div class="page-separator">
                <div class="page-separator__text">Nội dung khoá học</div>
            </div>
            <div class="row mb-0">
                <div class="col-lg-7">


                    <div class="accordion js-accordion accordion--boxed list-group-flush" id="parent">

                        @php
                            $count=0;
                        @endphp
                        @foreach ($sections as $item)
                        <div class="accordion__item @if ($count==0) echo "open"; @endif">
                            <a href="#" class="accordion__toggle" data-toggle="collapse" data-target="#course-toc-{{ $item->id }}" data-parent="#parent">
                                <span class="flex">{{ $item->name }}</span>
                                <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                            </a>
                            <div class="accordion__menu collapse @if ($count==0) show @endif"" id="course-toc-{{ $item->id }}">
                                @foreach ($item->lessons as $lesson)
                                <div class="accordion__menu-link active">
                                    <!-- <span class="material-icons icon-16pt icon--left text-muted">lock</span> -->
                                    <span class="icon-holder icon-holder--small icon-holder--primary rounded-circle d-inline-flex icon--left">
                                        <i class="material-icons icon-16pt">play_circle_outline</i>
                                    </span>
                                    <a class="flex" href="student-lesson">{{ $lesson->name }}</a>
                                    <span class="text-muted">{{ $lesson->duration }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @php
                            $count++;
                        @endphp
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-5 justify-content-center">


                    <div class="card">
                        <div class="card-body py-16pt text-center">
                            @if ($isHaveThisCourse)
                                <span class="icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-8pt">
                                    <i class="material-icons">book</i>
                                </span>
                                <h4></h4>
                                <a href="{{route('student_lesson', ['course_id'=>$course->id])}}" class="btn btn-accent mb-8pt">Truy cập khoá học</a>
                            @else
                                <span class="icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-8pt">
                                    <i class="material-icons">timer</i>
                                </span>
                                <h4 class="card-title"><strong>Mở khoá khoá học</strong></h4>
                                <p class="card-subtitle text-70 mb-2">Truy cập đến tất cả nội dung của khoá học này chỉ với</p>
                                <a id="buy_course" course-id={{$course->id}} href="" class="btn btn-accent mb-8pt">{{number_format($course->price, 0, ' ', ',') }} VNĐ</a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-section bg-white border-bottom-2">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-24pt mb-md-0">
                    <h4>Thông tin giảng viên</h4>
                    <p class="text-70 mb-24pt">{!!App\Models\Instructor::find($course->instructor_id)->introduce!!}</p>

                </div>
                <div class="col-md-5 pt-sm-32pt pt-md-0 d-flex flex-column align-items-center justify-content-start">
                    <div class="text-center">
                        @csrf
                        <p class="mb-16pt">
                            <img src="{!! asset($instructor->avatar_url) .'?'. time() !!}" alt="guy-6" class="rounded-circle" width="80" height="80cd ..">
                        </p>
                        <h4 class="m-0 mb-2">{{ $instructor->name }}</h4>
                        {{-- <p class="lh-1">
                            <small class="text-muted">Angular, Web Development</small>
                        </p> --}}
                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                            @if (App\Models\Student::find(Auth::user()->id)->isFollowing($instructor->id))
                                <a instructor-id={{$instructor->id}} class="btn btn-outline-secondary mb-16pt mb-sm-0 mr-sm-16pt follow">Bỏ theo dõi
                            @else
                                <a instructor-id={{$instructor->id}} class="btn btn-outline-secondary mb-16pt mb-sm-0 mr-sm-16pt follow">Theo dõi
                            @endif
                            </a>
                            <a href="{{ route('get_user_home', ['username' => $instructor->username])}}" class="btn btn-outline-secondary">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-section bg-white border-bottom-2">



        <div class="container page__container">
            <div class="page-separator">
                <div class="page-separator__text">Student Feedback</div>
            </div>
            <div class="row mb-32pt">
                <div class="col-md-3 mb-32pt mb-md-0">
                    <div class="display-1">4.7</div>
                    <div class="rating rating-24">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                    </div>
                    <p class="text-muted mb-0">20 ratings</p>
                </div>
                <div class="col-md-9">

                    <div class="row align-items-center mb-8pt" data-toggle="tooltip" data-title="75% rated 5/5" data-placement="top">
                        <div class="col-md col-sm-6">
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                            <div class="rating">
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-8pt" data-toggle="tooltip" data-title="16% rated 4/5" data-placement="top">
                        <div class="col-md col-sm-6">
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="16" style="width: 16%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                            <div class="rating">
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-8pt" data-toggle="tooltip" data-title="12% rated 3/5" data-placement="top">
                        <div class="col-md col-sm-6">
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="12" style="width: 12%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                            <div class="rating">
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-8pt" data-toggle="tooltip" data-title="9% rated 2/5" data-placement="top">
                        <div class="col-md col-sm-6">
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="9" style="width: 9%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                            <div class="rating">
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-8pt" data-toggle="tooltip" data-title="0% rated 0/5" data-placement="top">
                        <div class="col-md col-sm-6">
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                            <div class="rating">
                                <span class="rating__item"><span class="material-icons">star</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>




            <div class="pb-16pt mb-16pt border-bottom row">
                <div class="col-md-3 mb-16pt mb-md-0">
                    <div class="d-flex">
                        <a href="student-profile" class="avatar avatar-sm mr-12pt">
                            <!-- <img src="LB" alt="avatar" class="avatar-img rounded-circle"> -->
                            <span class="avatar-title rounded-circle">LB</span>
                        </a>
                        <div class="flex">
                            <p class="small text-muted m-0">2 days ago</p>
                            <a href="student-profile" class="card-title">Laza Bogdan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="rating mb-8pt">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                    </div>
                    <p class="text-70 mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                </div>
            </div>

            <div class="pb-16pt mb-16pt border-bottom row">
                <div class="col-md-3 mb-16pt mb-md-0">
                    <div class="d-flex">
                        <a href="student-profile" class="avatar avatar-sm mr-12pt">
                            <!-- <img src="UK" alt="avatar" class="avatar-img rounded-circle"> -->
                            <span class="avatar-title rounded-circle">UK</span>
                        </a>
                        <div class="flex">
                            <p class="small text-muted m-0">2 days ago</p>
                            <a href="student-profile" class="card-title">Umberto Klass</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="rating mb-8pt">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                    </div>
                    <p class="text-70 mb-0">This course is absolutely amazing, Bryan goes* out of his way to really expl*ain things clearly I couldn&#39;t be happier, so glad I made this purchase!</p>
                </div>
            </div>

            <div class="pb-16pt mb-24pt row">
                <div class="col-md-3 mb-16pt mb-md-0">
                    <div class="d-flex">
                        <a href="student-profile" class="avatar avatar-sm mr-12pt">
                            <!-- <img src="AD" alt="avatar" class="avatar-img rounded-circle"> -->
                            <span class="avatar-title rounded-circle">AD</span>
                        </a>
                        <div class="flex">
                            <p class="small text-muted m-0">2 days ago</p>
                            <a href="student-profile" class="card-title">Adrian Demian</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="rating mb-8pt">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                    </div>
                    <p class="text-70 mb-0">This course is absolutely amazing, Bryan goes* out of his way to really expl*ain things clearly I couldn&#39;t be happier, so glad I made this purchase!</p>
                </div>
            </div>

        </div>

    </div>

    <div class="page-section">
        <div class="container page__container">
            <div class="page-heading">
                <h4>Top Development Courses</h4>
                <a href="library-development" class="ml-sm-auto text-underline">See Development Courses</a>
            </div>



            <div class="position-relative carousel-card">
                <div class="js-mdk-carousel row d-block" id="carousel-courses1">

                    <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-courses1" role="button" data-slide="next">
                        <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                        <span class="sr-only">Next</span>
                    </a>

                    <div class="mdk-carousel__content">

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">


                                <a href="student-course" class="js-image" data-position="">
                                    <img src="assets/images/paths/angular_430x168.png" alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">play_circle_outline</i>
                                            <span class="card-title text-white">Preview</span>
                                        </span>
                                    </span>
                                </a>

                                <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">NEW</span>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course">Learn Angular fundamentals</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
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
                                        <p class="lh-1 mb-0">
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
                                        <a href="student-course" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>



                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">


                                <a href="student-course" class="js-image" data-position="">
                                    <img src="assets/images/paths/swift_430x168.png" alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">play_circle_outline</i>
                                            <span class="card-title text-white">Preview</span>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course">Build an iOS Application in Swift</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course" data-toggle="tooltip" data-title="Remove Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
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
                                        <p class="lh-1 mb-0">
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
                                        <a href="student-course" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>



                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">


                                <a href="student-course" class="js-image" data-position="">
                                    <img src="assets/images/paths/wordpress_430x168.png" alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">play_circle_outline</i>
                                            <span class="card-title text-white">Preview</span>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course">Build a WordPress Website</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
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
                                        <p class="lh-1 mb-0">
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
                                        <a href="student-course" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>



                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">


                                <a href="student-course" class="js-image" data-position="left">
                                    <img src="assets/images/paths/react_430x168.png" alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">play_circle_outline</i>
                                            <span class="card-title text-white">Preview</span>
                                        </span>
                                    </span>
                                </a>

                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title" href="student-course">Become a React Native Developer</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <small class="text-50">6 hours</small>
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
                                        <p class="lh-1 mb-0">
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
                                        <a href="student-course" class="btn btn-primary">Watch trailer</a>
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
