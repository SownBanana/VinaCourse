@extends('layout.student')
@section('active-mquiz', 'active')
@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Quizzes</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>

                    <li class="breadcrumb-item">

                        <a href="">Student</a>

                    </li>

                    <li class="breadcrumb-item active">

                        Quizzes

                    </li>

                </ol>

            </div>
        </div>


    </div>
</div>


<div class="container page__container page-section">




    <div class="row card-group-row">

        <div class="card-group-row__col col-md-6">

            <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                    <a href="student-take-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/angular_routing_200x168.png" alt="Angular Routing In-Depth" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex mr-12pt">
                        <a class="card-title" href="student-take-quiz">Angular Routing In-Depth</a>
                        <div class="card-subtitle text-50">12 min ago</div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <span class="lead text-headings lh-1">5.8</span>
                        <small class="text-50 text-uppercase text-headings">Score</small>
                    </div>
                </div>

                <div class="progress rounded-0" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex mr-2">
                            <a href="student-take-quiz" class="btn btn-light btn-sm">

                                <i class="material-icons icon--left">refresh</i> Continue

                            </a>
                        </div>

                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_horiz</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="student-take-quiz" class="dropdown-item">Continue</a>
                                <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                                <div class="dropdown-divider"></div>
                                <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="card-group-row__col col-md-6">

            <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                    <a href="student-take-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/angular_testing_200x168.png" alt="Angular Unit Testing" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex mr-12pt">
                        <a class="card-title" href="student-take-quiz">Angular Unit Testing</a>
                        <div class="card-subtitle text-50">2 days ago</div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <span class="lead text-headings lh-1">10</span>
                        <small class="text-50 text-uppercase text-headings">Score</small>
                    </div>
                </div>

                <div class="progress rounded-0" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex mr-2">
                            <a href="student-take-quiz" class="btn btn-light btn-sm">

                                <i class="material-icons icon--left">refresh</i> Continue

                            </a>
                        </div>

                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_horiz</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="student-take-quiz" class="dropdown-item">Continue</a>
                                <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                                <div class="dropdown-divider"></div>
                                <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="card-group-row__col col-md-6">

            <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                    <a href="student-take-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/typescript_200x168.png" alt="Introduction to TypeScript" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex mr-12pt">
                        <a class="card-title" href="student-take-quiz">Introduction to TypeScript</a>
                        <div class="card-subtitle text-50">3 days ago</div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <span class="lead text-headings lh-1">2.8</span>
                        <small class="text-50 text-uppercase text-headings">Score</small>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex mr-2">
                            <a href="student-take-quiz" class="btn btn-light btn-sm">

                                <i class="material-icons icon--left">playlist_add_check</i> Reset
                                <span class="badge badge-dark badge-notifications ml-2">5</span>

                            </a>
                        </div>

                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_horiz</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="student-take-quiz" class="dropdown-item">Continue</a>
                                <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                                <div class="dropdown-divider"></div>
                                <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="card-group-row__col col-md-6">

            <div class="card card-group-row__card card-sm">
                <div class="card-body d-flex align-items-center">
                    <a href="student-take-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/angular_200x168.png" alt="Angular Fundamentals" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex mr-12pt">
                        <a class="card-title" href="student-take-quiz">Angular Fundamentals</a>
                        <div class="card-subtitle text-50">3 days ago</div>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <span class="lead text-headings lh-1">3.3</span>
                        <small class="text-50 text-uppercase text-headings">Score</small>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div class="flex mr-2">
                            <a href="student-take-quiz" class="btn btn-light btn-sm">

                                <i class="material-icons icon--left">playlist_add_check</i> Reset
                                <span class="badge badge-dark badge-notifications ml-2">5</span>

                            </a>
                        </div>

                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_horiz</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="student-take-quiz" class="dropdown-item">Continue</a>
                                <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                                <div class="dropdown-divider"></div>
                                <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
                            </div>
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



    <div class="card stack">
        <div class="list-group list-group-flush">

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                    <a href="instructor-edit-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/mailchimp_200x168.png" alt="Newsletter Design" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex">
                        <a class="card-title" href="instructor-edit-quiz">Newsletter Design</a>
                        <div class="card-subtitle text-50">12 min ago</div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center mr-16pt">
                    <span class="lead text-headings lh-1">5.8</span>
                    <small class="text-50 text-uppercase text-headings">Score</small>
                </div>

                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="student-take-quiz" class="dropdown-item">Continue</a>
                        <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                        <div class="dropdown-divider"></div>
                        <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
                    </div>
                </div>

            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                    <a href="instructor-edit-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/xd_200x168.png" alt="Adobe XD" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex">
                        <a class="card-title" href="instructor-edit-quiz">Adobe XD</a>
                        <div class="card-subtitle text-50">2 days ago</div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center mr-16pt">
                    <span class="lead text-headings lh-1">10</span>
                    <small class="text-50 text-uppercase text-headings">Score</small>
                </div>

                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="student-take-quiz" class="dropdown-item">Continue</a>
                        <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                        <div class="dropdown-divider"></div>
                        <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
                    </div>
                </div>

            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                    <a href="instructor-edit-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/invision_200x168.png" alt="inVision App" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex">
                        <a class="card-title" href="instructor-edit-quiz">inVision App</a>
                        <div class="card-subtitle text-50">3 days ago</div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center mr-16pt">
                    <span class="lead text-headings lh-1">2.8</span>
                    <small class="text-50 text-uppercase text-headings">Score</small>
                </div>

                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="student-take-quiz" class="dropdown-item">Continue</a>
                        <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                        <div class="dropdown-divider"></div>
                        <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
                    </div>
                </div>

            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                    <a href="instructor-edit-quiz" class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                        <img src="assets/images/paths/craft_200x168.png" alt="Craft by inVision" class="avatar-img rounded">
                        <span class="overlay__content"></span>
                    </a>
                    <div class="flex">
                        <a class="card-title" href="instructor-edit-quiz">Craft by inVision</a>
                        <div class="card-subtitle text-50">3 days ago</div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center mr-16pt">
                    <span class="lead text-headings lh-1">3.3</span>
                    <small class="text-50 text-uppercase text-headings">Score</small>
                </div>

                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="student-take-quiz" class="dropdown-item">Continue</a>
                        <a href="student-quiz-result-details" class="dropdown-item">View Result</a>
                        <div class="dropdown-divider"></div>
                        <a href="student-take-quiz" class="dropdown-item text-danger">Reset Quiz</a>
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

@endsection