@extends('layout.app')
@section('active-bcourse', 'active')
@section('content')
    <div class="page-section">
        <div class="container page__container">
            <div class="d-flex flex-column flex-sm-row align-items-sm-center mb-24pt" style="white-space: nowrap;">
                <small class="flex text-muted text-headings text-uppercase mr-3 mb-2 mb-sm-0"></small>
                <a  data-target="#library-drawer" data-toggle="sidebar" class="btn btn-sm btn-white ml-sm-16pt">
                    <i class="material-icons icon--left">tune</i> Lọc khoá học
                </a>

            </div>

            <!-- Khoá học hot -->

            <div class="page-separator">
                <div class="page-separator__text">Khoá học hot 🔥🔥🔥</div>
            </div>



            <div class="row card-group-row">

                @foreach ($hotCourses as $course)
                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">
                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card" data-partial-height="44" data-toggle="popover" data-trigger="click">
                        <a href="student-course" class="js-image itemheight" data-position="">
                            <img src="@if ($course->thumbnail_url)
                                {!!asset($course->thumbnail_url)!!}
                            @else
                                assets/images/paths/angular_430x168.png
                            @endif" alt="course">

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
                                        <a class="card-title" href="student-course">{{ $course->name }}</a>
                                        <small class="text-50 font-weight-bold mb-4pt">{{ number_format($course->price, 0, ' ', ',') }} VNĐ</span></small>
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
                                        @php
                                            $totalTime = 0;
                                            $totalQuizzes = 0;
                                            $totalLessons = 0;
                                            foreach ($course->sections as $section) {
                                                // $totalLessons++;
                                                foreach ($section->lessons as $lesson) {
                                                    $totalLessons++;
                                                    $totalTime += 10;
                                                }
                                                $totalQuizzes += count($section->quizzes);
                                            }
                                        @endphp
                                    <small class="text-50" >{{ floor(($totalTime/60)*10)/10 }} giờ</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left mr-12pt">
                                <img src={{ $course->thumbnail_url }} width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">{{ $course->name }}</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">với</span>
                                    <span class="text-black-50 small font-weight-bold">{{App\Models\Account::find($course->instructor_id)->name}}</span>
                                </p>
                            </div>
                        </div>

                        <div class="my-16pt">
                            {!! Str::of($course->introduce)->limit(1000) !!}
                        </div>

                        <div ds class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>
                                        {{ floor(($totalTime/60)*10)/10 }} giờ</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>{{$totalLessons}} khoá học</small></p>
                                </div>
                                @if ($totalQuizzes > 0)
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>{{ $totalQuizzes }} Quiz</small></p>
                                    </div>
                                @endif

                                {{-- <a href={{ route('student_course', ['username' => Auth::user()->username, 'id' => $course->id]) }} class="btn btn-primary">Watch trailer</a> --}}
                                <a href="/student/course-preview/{{ $course->id }}" class="btn btn-primary">Watch trailer</a>

                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="mb-32pt">

                <ul class="pagination justify-content-start pagination-xsm m-0">
                    <li class="page-item @if ($hotCourses->currentPage() == 1) disabled @endif">
                    <a class="page-link" href="{{route('browse-course')}}?page={{ Request()->page }}&hotpage={{max($hotCourses->currentPage() - 1, 1)}}" aria-label="Previous">
                            <span aria-hidden="true" class="material-icons">chevron_left</span>
                            <span>Prev</span>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $hotCourses->lastPage(); $i++)
                        <li class="page-item">
                        <a class="page-link @if ($i == $hotCourses->currentPage()) selected_page @endif" href="{{route('browse-course')}}?page={{ Request()->page }}&hotpage={{$i}}" aria-label="Page {{$i}}">
                                <span>{{$i}}</span>
                            </a>
                        </li>
                    @endfor
                    <li class="page-item @if ($hotCourses->currentPage() == $hotCourses->lastPage()) disabled @endif">
                        <a class="page-link" href="{{route('browse-course')}}?page={{ Request()->page }}&hotpage={{min($hotCourses->currentPage() + 1, $hotCourses->lastPage())}}" aria-label="Next">
                            <span>Next</span>
                            <span aria-hidden="true" class="material-icons">chevron_right</span>
                        </a>
                    </li>
                </ul>

                {{-- {{ $courses->links() }} --}}

            </div>


            <!-- Khoá học mới -->

            <div class="page-separator">
                <div class="page-separator__text">Khoá học mới</div>
            </div>



            <div class="row card-group-row">

                @foreach ($courses as $course)
                <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">
                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card" data-partial-height="44" data-toggle="popover" data-trigger="click">
                        <a href="student-course" class="js-image itemheight" data-position="">
                            <img src="@if ($course->thumbnail_url)
                                {!!asset($course->thumbnail_url)!!}
                            @else
                                assets/images/paths/angular_430x168.png
                            @endif" alt="course">

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
                                        <a class="card-title" href="student-course">{{ $course->name }}</a>
                                        <small class="text-50 font-weight-bold mb-4pt">{{ number_format($course->price, 0, ' ', ',') }} VNĐ</span></small>
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
                                        @php
                                            $totalTime = 0;
                                            $totalQuizzes = 0;
                                            $totalLessons = 0;
                                            foreach ($course->sections as $section) {
                                                // $totalLessons++;
                                                foreach ($section->lessons as $lesson) {
                                                    $totalLessons++;
                                                    $totalTime += 10;
                                                }
                                                $totalQuizzes += count($section->quizzes);
                                            }
                                        @endphp
                                    <small class="text-50" >{{ floor(($totalTime/60)*10)/10 }} giờ</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left mr-12pt">
                                <img src={{ $course->thumbnail_url }} width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">{{ $course->name }}</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">với</span>
                                    <span class="text-black-50 small font-weight-bold">{{App\Models\Account::find($course->instructor_id)->name}}</span>
                                </p>
                            </div>
                        </div>

                        <div class="my-16pt">
                            {!! Str::of($course->introduce)->limit(1000) !!}
                        </div>

                        <div ds class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>
                                        {{ floor(($totalTime/60)*10)/10 }} giờ</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>{{$totalLessons}} khoá học</small></p>
                                </div>
                                @if ($totalQuizzes > 0)
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>{{ $totalQuizzes }} Quiz</small></p>
                                    </div>
                                @endif

                                {{-- <a href={{ route('student_course', ['username' => Auth::user()->username, 'id' => $course->id]) }} class="btn btn-primary">Watch trailer</a> --}}
                                <a href="/student/course-preview/{{ $course->id }}" class="btn btn-primary">Watch trailer</a>

                            </div>
                        </div>



                    </div>

                </div>
                @endforeach

            </div>

            <div class="mb-32pt">

                <ul class="pagination justify-content-start pagination-xsm m-0">
                    <li class="page-item @if ($courses->currentPage() == 1) disabled @endif">
                    <a class="page-link" href="{{route('browse-course')}}?hotpage={{ Request()->hotpage }}&page={{max($courses->currentPage() - 1, 1)}}" aria-label="Previous">
                            <span aria-hidden="true" class="material-icons">chevron_left</span>
                            <span>Prev</span>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $courses->lastPage(); $i++)
                        <li class="page-item">
                        <a class="page-link @if ($i == $courses->currentPage()) selected_page @endif" href="{{route('browse-course')}}?hotpage={{Request()->hotpage}}&page={{$i}}" aria-label="Page {{$i}}">
                                <span>{{$i}}</span>
                            </a>
                        </li>
                    @endfor
                    <li class="page-item @if ($courses->currentPage() == $courses->lastPage()) disabled @endif">
                        <a class="page-link" href="{{route('browse-course')}}?hotpage={{Request()->hotpage}}&page={{min($courses->currentPage() + 1, $courses->lastPage())}}" aria-label="Next">
                            <span>Next</span>
                            <span aria-hidden="true" class="material-icons">chevron_right</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Filter drawler -->
    <div class="mdk-drawer js-mdk-drawer " id="library-drawer" data-align="end">
        <div class="mdk-drawer__content ">
            <div class="sidebar sidebar-light sidebar-right py-16pt">

                <div class="d-flex align-items-center mb-24pt  d-lg-none">
                    <form action="index.html" class="search-form search-form--light mx-16pt pr-0 pl-16pt">
                        <input type="text" class="form-control pl-0" placeholder="Search">
                        <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    </form>
                </div>

                <div class="sidebar-heading">Danh mục</div>
                <ul class="sidebar-menu">
                    @foreach ($topics as $item)
                    <li class="sidebar-menu-item active">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">code</span>
                            <span class="sidebar-menu-text">{{ $item->name }}</span>
                        </a>
                    </li>
                    @endforeach
                    {{-- <li class="sidebar-menu-item active">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">code</span>
                            <span class="sidebar-menu-text">Web Development</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">brush</span>
                            <span class="sidebar-menu-text">Design</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">settings_cell</span>
                            <span class="sidebar-menu-text">iOS &amp; Swift</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">android</span>
                            <span class="sidebar-menu-text">Android</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">business_center</span>
                            <span class="sidebar-menu-text">Business</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">crop_original</span>
                            <span class="sidebar-menu-text">Photography</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">payment</span>
                            <span class="sidebar-menu-text">Marketing</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">store</span>
                            <span class="sidebar-menu-text">eCommerce</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">redeem</span>
                            <span class="sidebar-menu-text">Health &amp; Fitness</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a href="" class="sidebar-menu-button">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">music_note</span>
                            <span class="sidebar-menu-text">Music</span>
                        </a>
                    </li> --}}
                </ul>

                <div class="sidebar-heading">Giá</div>
                <div class="sidebar-block">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck01">
                            <label class="custom-control-label" for="filtersCheck01">Giá cao</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck02">
                            <label class="custom-control-label" for="filtersCheck02">Giá rẻ</label>
                        </div>
                    </div>
                </div>

                {{-- Edit for something else filters  --}}
                {{-- <div class="sidebar-heading">Subscription</div>
                <div class="sidebar-block">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck07" checked="">
                            <label class="custom-control-label" for="filtersCheck07">All</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck08">
                            <label class="custom-control-label" for="filtersCheck08">Free</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck09">
                            <label class="custom-control-label" for="filtersCheck09">Beginner</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck10">
                            <label class="custom-control-label" for="filtersCheck10">Advanced</label>
                        </div>
                    </div>
                </div>

                <div class="sidebar-heading">Content type</div>
                <div class="sidebar-block">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck11" checked="">
                            <label class="custom-control-label" for="filtersCheck11">All</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck12">
                            <label class="custom-control-label" for="filtersCheck12">Episode</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck13">
                            <label class="custom-control-label" for="filtersCheck13">Video</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck14">
                            <label class="custom-control-label" for="filtersCheck14">Article</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck15">
                            <label class="custom-control-label" for="filtersCheck15">Book</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" value="" id="filtersCheck16">
                            <label class="custom-control-label" for="filtersCheck16">Screencast</label>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
@endsection
