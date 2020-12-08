@extends('layout.app')
@section('active-bcourse', 'active')
@section('content')
<script>
    var course = {!! $course->toJson() !!};
    console.log(course);
</script>
    <div class="mdk-drawer js-mdk-drawer" data-align="end" data-opened data-persistent>
        <div id="content_pane" class="mdk-drawer__content">
            <div class="sidebar sidebar-dark-dodger-blue sidebar-right" data-perfect-scrollbar>
    
                {{-- <a href="index" class="sidebar-brand ">    
                <span>Mục lục</span>
                </a> --}}
                <div class="mt-5 sidebar-heading text-white-50">Mục lục</div>
                <ul class="sidebar-menu">
                @foreach ($course['sections'] as $section)
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#section{{$section->id}}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--right">book</span>
                                {{$section->name}}
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="section{{$section->id}}">
                            @foreach ($section['lessons'] as $lesson)
                                <li class="sidebar-menu-item">
                                    <a lesson-id="{{$lesson->id}}" class="viewlesson sidebar-menu-button" href="">
                                        <span class="sidebar-menu-text">{{$lesson->name}}</span>
                                    </a>
                                </li>                                                                        
                            @endforeach
                            @foreach ($section['quizzes'] as $quiz)
                                <li class="sidebar-menu-item">
                                    <a lesson-id="{{$quiz->id}}" class="viewquiz sidebar-menu-button" href="">
                                        <span class="sidebar-menu-text">{{$quiz->name}}</span>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                        </li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar navbar-light border-0 navbar-expand">
        <div class="container page__container">
            <div class="media flex-nowrap">
                <div class="media-left mr-16pt">
                    <a href="student-course"><img src="assets/images/paths/angular_64x64.png" width="40" alt="Angular" class="rounded"></a>
                </div>
                <div class="media-body">
                    <a href="student-course" class="card-title text-body mb-0">{{$course->name}}</a>
                    <p class="lh-1 d-flex align-items-center mb-0">
                        <span class="text-50 small font-weight-bold mr-8pt">{{App\Models\Account::find($course->instructor_id)->name}}</span>
                        {{-- <span class="text-50 small">Software Engineer and Developer</span> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary pt-32pt pb-1 mb-4">
        <div class="container page__container">
            <nav class="course-nav">
                @foreach ($course['sections'] as $section)
                    <a data-toggle="tooltip" data-placement="bottom" data-title="{{$section->name}}" href=""><span class="material-icons">account_circle</span></a>
                @endforeach
            </nav>
            <div class="d-flex flex-wrap align-items-end mb-16pt">
                <h1 class="text-white flex m-0">{{$course['sections'][0]['lessons'][0]->name}}</h1>
                <p class="h3 text-white-50 font-weight-light m-0">{{$course['sections'][0]['lessons'][0]->duration}}</p>
            </div>
            <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt">
                <div class="player embed-responsive-item">
                    <div class="player__embed" id="featured-media">
                        <iframe id="featured-video" class="embed-responsive-item featured-video" src="{{$course['sections'][0]['lessons'][0]->video_url}}" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
    <div class="container hero__lead measure-hero-lead text-black mb-24pt">{!!$course['sections'][0]['lessons'][0]->info!!}</div>
    
    <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
        <div class="container page__container">
            <ul class="nav navbar-nav flex align-items-sm-center">
                <li class="nav-item navbar-list__item">
                    <div class="media align-items-center">
                        <span class="media-left mr-16pt">
                            @if (App\Models\Account::find($course->instructor_id)->avatar_url)
                                <img src="{!! asset(App\Models\Account::find($course->instructor_id)->avatar_url) . '?' . time()!!}" width="40" alt="avatar" class="rounded-circle">
                            @else
                                <img src="assets/images/people/50/guy-6.jpg" width="40" alt="avatar" class="rounded-circle">
                            @endif
                        </span>
                        <div class="media-body">
                            <a class="card-title m-0" href="/{{App\Models\Account::find($course->instructor_id)->username}}">{{App\Models\Account::find($course->instructor_id)->name}}</a>
                            <p class="text-50 lh-1 mb-0">Giảng viên</p>
                        </div>
                    </div>
                </li>
                <li class="nav-item navbar-list__item">
                    <i class="material-icons text-muted icon--left">schedule</i>
                    2h 46m
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
    {{-- </div> --}}
@endsection