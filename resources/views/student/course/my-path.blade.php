@extends('layout.student')
@section('active-mpath', 'active')
@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Learning Paths</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>

                    <li class="breadcrumb-item active">

                        Learning Paths

                    </li>

                </ol>

            </div>
        </div>


        <div class="row" role="tablist">
            <div class="col-auto">
                <a href="student-my-courses" class="btn btn-outline-secondary">Courses</a>
            </div>
        </div>

    </div>
</div>


<div class="container page__container page-section">





    <div class="page-separator">
        <div class="page-separator__text">Featured Paths</div>
    </div>



    <div class="row card-group-row mb-lg-8pt">

        <div class="col-sm-4 card-group-row__col">

            <div class="card overlay--show card-lg overlay--primary-dodger-blue stack stack--1 card-group-row__card">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Angular</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Remove Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>

                    </div>



                    <div class="d-flex align-items-center mt-8pt">
                        <small class="text-black-50 mr-8pt">Your rating</small>
                        <div class="rating mr-8pt">
                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                            <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                        </div>
                        <small class="text-black-50">4/5</small>
                    </div>


                    <p class="mt-16pt text-black-70 flex">Angular is a platform for building mobile and desktop web applications.</p>

                    <div class="mb-16pt d-none">
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


                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-take-lesson" class="btn btn-primary">Resume</a>
                    </div>


                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card card-lg overlay--primary-dodger-blue stack stack--1 card-group-row__card">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Swift</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>



                    <div class="rating mt-8pt">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                    </div>


                    <p class="mt-16pt text-black-70 flex">Swift is a powerful and intuitive programming language for macOS, iOS, watchOS, tvOS and beyond.</p>

                    <div class="mb-16pt d-none">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Swift</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Swift applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Swift CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Swift</small></p>
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
                            <a href="student-path" class="btn btn-outline-secondary">Begin</a>
                        </div>
                    </div>


                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card card-lg overlay--primary-dodger-blue stack stack--1 card-group-row__card">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">WordPress</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>



                    <div class="rating mt-8pt">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                    </div>


                    <p class="mt-16pt text-black-70 flex">WordPress is open source software you can use to create a beautiful website, blog, or app.</p>

                    <div class="mb-16pt d-none">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with WordPress</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Create complete WordPress applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Working with the WordPress CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>Testing with WordPress</small></p>
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
                            <a href="student-path" class="btn btn-outline-secondary">Begin</a>
                        </div>
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
        <div class="page-separator__text">Development Paths</div>
    </div>



    <div class="row card-group-row mb-lg-8pt">

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">React Native</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/react_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">React Native</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with React Native and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Dev Ops</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/devops_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Dev Ops</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Dev Ops and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/redis_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Redis</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/redis_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Redis</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Redis and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-overlay-onload-show data-popover-onload-show data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/mailchimp_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">MailChimp</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Remove Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/mailchimp_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">MailChimp</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with MailChimp and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Angular</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/angular_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Angular</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Swift</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/swift_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Swift</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Swift and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">WordPress</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/wordpress_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">WordPress</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with WordPress and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
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
        <div class="page-separator__text">Design Paths</div>
    </div>



    <div class="row card-group-row mb-lg-8pt">

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/sketch_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Sketch</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/sketch_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Sketch</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Sketch and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/flinto_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Flinto</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/flinto_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Flinto</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Flinto and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/photoshop_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Photoshop</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/photoshop_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Photoshop</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Photoshop and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/figma_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Figma</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/figma_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Figma</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Figma and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/xd_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Adobe XD</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/xd_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Adobe XD</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Adobe XD and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/invision_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">inVision App</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/invision_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">inVision App</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with inVision App and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
                </div>
            </div>


        </div>

        <div class="col-sm-4 card-group-row__col">

            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card" data-toggle="popover" data-trigger="click">

                <div class="card-body d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="flex">
                            <div class="d-flex align-items-center">
                                <div class="rounded mr-12pt z-0 o-hidden">
                                    <div class="overlay">
                                        <img src="assets/images/paths/craft_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                                        <span class="overlay__content overlay__content-transparent">
                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                <small class="h6 small text-white mb-0" style="font-weight: 500;">80%</small>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="card-title">Craft by inVision</div>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>18 courses</small></p>
                                </div>
                            </div>
                        </div>

                        <a href="student-path" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                    </div>


                </div>
            </div>

            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="assets/images/paths/craft_40x40@2x.png" width="40" height="40" alt="Angular" class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title">Craft by inVision</div>
                        <p class="text-black-50 d-flex lh-1 mb-0 small">18 courses</p>
                    </div>
                </div>

                <p class="mt-16pt text-black-70">Learn the fundamentals of working with Craft by inVision and how to create basic applications.</p>

                <div class="my-32pt">
                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                        <div class="d-flex align-items-center mr-8pt">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>50 minutes left</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="student-path" class="btn btn-primary mr-8pt">Resume</a>
                        <a href="student-path" class="btn btn-outline-secondary ml-0">Start over</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <small class="text-black-50 mr-8pt">Your rating</small>
                    <div class="rating mr-8pt">
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                    </div>
                    <small class="text-black-50">4/5</small>
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
@endsection