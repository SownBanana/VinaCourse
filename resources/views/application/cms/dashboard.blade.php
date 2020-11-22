@extends('layout.app')

@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">CMS Dashboard</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>

                    <li class="breadcrumb-item">

                        <a href="">CMS</a>

                    </li>

                    <li class="breadcrumb-item active">

                        Dashboard

                    </li>

                </ol>

            </div>
        </div>


        <div class="row" role="tablist">
            <div class="col-auto">
                <a href="" class="btn btn-outline-secondary">New Post</a>
            </div>
        </div>

    </div>
</div>

<div class="container page__container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Overview</div>
    </div>

    <div class="row card-group-row mb-lg-8pt">
        <div class="col-lg-7 card-group-row__col">

            <div class="card card-group-row__card d-flex flex-column">
                <div class="row no-gutters flex">
                    <div class="col-6">
                        <div class="card-body">
                            <h6 class="text-50">Overview</h6>

                            <div class="h2 mb-0">92</div>
                            <div class="d-flex flex-column">
                                <strong>Total Posts</strong>
                                <small class="text-50">13 this week</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="h2 mb-0">+3</div>
                            <div class="d-flex flex-column">
                                <strong>Today</strong>
                                <small class="text-50">Published</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 border-left">
                        <div class="card-body">
                            <h6 class="text-50">Engagement</h6>

                            <div class="h2 mb-0">2,211</div>
                            <div class="d-flex flex-column">
                                <strong>Total Views</strong>
                                <small class="text-50">1.3k today</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="h2 mb-0">113</div>
                            <strong>Comments</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-5 card-group-row__col">

            <div class="card card-group-row__card">
                <div class="card-body">
                    <h6>Latest Posts</h6>

                    <div class="d-flex align-items-center">
                        <div class="mr-12pt">
                            <div class="avatar avatar-xl avatar-4by3">
                                <img src="assets/images/paths/invision_200x168.png" alt="Avatar" class="avatar-img rounded">
                            </div>
                        </div>
                        <div class="flex">
                            <a href="" class="card-title">Design Systems Essentials</a>
                            <small class="text-50">35 views this week</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">




                    <div class="d-flex align-items-center mb-8pt">
                        <div class="mr-8pt">
                            <div class="avatar avatar-sm avatar-4by3">
                                <img src="assets/images/paths/photoshop_200x168.png" alt="Avatar" class="avatar-img rounded">
                            </div>
                        </div>
                        <div class="flex d-flex flex-column">
                            <a href="" class="card-title">Semantic Logo Design</a>
                            <small class="text-50">78 views this week</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="mr-8pt">
                            <div class="avatar avatar-sm avatar-4by3">
                                <img src="assets/images/paths/sketch_200x168.png" alt="Avatar" class="avatar-img rounded">
                            </div>
                        </div>
                        <div class="flex d-flex flex-column">
                            <a href="" class="card-title">Merge Inconsistent Symbols</a>
                            <small class="text-50">78 views this week</small>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <div class="page-separator">
        <div class="page-separator__text">Popular</div>
    </div>



    <div class="posts-cards mb-24pt">

        <div class="card posts-card">
            <div class="posts-card__content d-flex align-items-center flex-wrap">
                <div class="avatar avatar-lg mr-3">
                    <a href=""><img src="assets/images/paths/invision_200x168.png" alt="avatar" class="avatar-img rounded"></a>
                </div>
                <div class="posts-card__title flex d-flex flex-column">
                    <a href="" class="card-title mr-3">Design Systems Essentials</a>
                    <small class="text-50">35 views last week</small>
                </div>
                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                    <div class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center">
                        <i class="material-icons text-muted-light mr-1">folder_open</i> inVision
                    </div>
                    <div class="mr-3 text-50 posts-card__date">
                        <small>11 Nov, 2018 07:46 AM</small>
                    </div>
                    <div class="media mr-2 ml-sm-auto align-items-center">
                        <div class="media-left mr-2 avatar-group">

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                        </div>
                        <div class="media-body">

                            <a href="">+2 more</a>

                        </div>
                    </div>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item">Action</a>
                        <a href="javascript:void(0)" class="dropdown-item">Other Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card posts-card">
            <div class="posts-card__content d-flex align-items-center flex-wrap">
                <div class="avatar avatar-lg mr-3">
                    <a href=""><img src="assets/images/paths/photoshop_200x168.png" alt="avatar" class="avatar-img rounded"></a>
                </div>
                <div class="posts-card__title flex d-flex flex-column">
                    <a href="" class="card-title mr-3">Semantic Logo Design</a>
                    <small class="text-50">78 views last week</small>
                </div>
                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                    <div class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center">
                        <i class="material-icons text-muted-light mr-1">folder_open</i> Photoshop
                    </div>
                    <div class="mr-3 text-50 posts-card__date">
                        <small>10 Nov, 2018 08:25 AM</small>
                    </div>
                    <div class="media mr-2 ml-sm-auto align-items-center">
                        <div class="media-left mr-2 avatar-group">

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                        </div>
                        <div class="media-body">

                            <a href="">+1 more</a>

                        </div>
                    </div>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item">Action</a>
                        <a href="javascript:void(0)" class="dropdown-item">Other Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card posts-card">
            <div class="posts-card__content d-flex align-items-center flex-wrap">
                <div class="avatar avatar-lg mr-3">
                    <a href=""><img src="assets/images/paths/sketch_200x168.png" alt="avatar" class="avatar-img rounded"></a>
                </div>
                <div class="posts-card__title flex d-flex flex-column">
                    <a href="" class="card-title mr-3">Merge Duplicates Inconsistent Symbols &amp; Styles</a>
                    <small class="text-50">78 views last week</small>
                </div>
                <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                    <div class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center">
                        <i class="material-icons text-muted-light mr-1">folder_open</i> Sketch
                    </div>
                    <div class="mr-3 text-50 posts-card__date">
                        <small>09 Nov, 2018 07:13 PM</small>
                    </div>
                    <div class="media mr-2 ml-sm-auto align-items-center">
                        <div class="media-left mr-2 avatar-group">

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                            </div>

                        </div>
                        <div class="media-body">

                        </div>
                    </div>
                </div>
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item">Action</a>
                        <a href="javascript:void(0)" class="dropdown-item">Other Action</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item">Some Other Action</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card p-8pt mb-0 d-inline-block">

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
@endsection