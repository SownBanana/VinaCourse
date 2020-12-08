<div class="container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Khoá học của tôi</div>
    </div>
    <div class="row">
        @if (count($courses) == 0)
            <div id="not_have_course" class="m-5 h4">Bạn chưa có khoá học nào. <a type="button" onclick="addCourse()"><u>Thêm khoá học </u></a> ngay</div>
        @endif
        @foreach ($courses as $course)
            {{-- {{$course->introduce}} --}}
            <div course_id="{{$course->id}}" class="course_element col-sm-6 col-md-4 col-xl-3">      
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal" data-partial-height="44" data-toggle="popover" data-trigger="click">
                    <a href="" class="js-image itemheight" data-position="">
                        <img src="@if ($course->thumbnail_url)
                            {!!asset($course->thumbnail_url)!!}
                        @else
                            assets/images/paths/angular_430x168.png
                        @endif" alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">edit</i>
                                <span class="card-title text-white">Sửa</span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="">{{$course->name}}</a>
                                </div>
                                <a href="" class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                            </div>
                            <div>{{number_format($course->price)}} VNĐ</div>
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
                            <img src="{{App\Models\Account::find($course->instructor_id)->avatar_url }}" width="40" height="40" alt="Angular" class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">{{$course->name}}</div>
                            <p class="lh-1">
                                <span class="text-black-50 small">với</span>
                                <span class="text-black-50 small font-weight-bold">
                                    {{App\Models\Account::find($course->instructor_id)->name}}
                                </span>
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
                        </div>
                        <div class="col text-right">
                            <a class="btn btn-primary whiteButton editCourse {{$course->id}}">Sửa khoá học</a>
                        </div>
                    </div>
    
                </div>
    
            </div>
        @endforeach


    </div>

    <div class="mb-32pt">
    <ul class="pagination justify-content-start pagination-xsm m-0">
        <li class="page-item @if ($courses->currentPage() == 1) disabled @endif">
        <a class="page-link" href="{{route('manage_courses')}}?page={{max($courses->currentPage() - 1, 1)}}" aria-label="Previous">
                <span aria-hidden="true" class="material-icons">chevron_left</span>
                <span>Prev</span>
            </a>
        </li>
        @for ($i = 1; $i <= $courses->lastPage(); $i++)
            <li class="page-item">
            <a class="page-link @if ($i == $courses->currentPage()) selected_page @endif" href="{{route('manage_courses')}}?page={{$i}}" aria-label="Page {{$i}}">
                    <span>{{$i}}</span>
                </a>
            </li>
        @endfor
        <li class="page-item @if ($courses->currentPage() == $courses->lastPage()) disabled @endif">
            <a class="page-link" href="{{route('manage_courses')}}?page={{min($courses->currentPage() + 1, $courses->lastPage())}}" aria-label="Next">
                <span>Next</span>
                <span aria-hidden="true" class="material-icons">chevron_right</span>
            </a>
        </li>
    </ul>

    </div>
</div>