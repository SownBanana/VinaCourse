@extends('admin.layout.app')

@section('content')

<div class="content-page">
    <div class="content">
        @include('admin.layout.topbar')

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href={{ route('admin_home') }}>Vina School</a></li>
                                <li class="breadcrumb-item"><a href={{ route('all_courses') }}>Khóa học</a></li>
                                <li class="breadcrumb-item active">Khóa học</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Khóa học</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">All Students</h5>
                                    <h3 class="my-2 py-1">9,184</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                    </p>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">All Instructors</h5>
                                    <h3 class="my-2 py-1">9,184</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                    </p>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">All Courses</h5>
                                    <h3 class="my-2 py-1">9,184</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                    </p>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="/admin/course/detail" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="/admin/course/detail" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="/admin/course/detail" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="#" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="#" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="#" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="#" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="/admin/images/small/small-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card with stretched link</h5>
                            <a href="#" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col-->

            </div>
            {{-- end row  --}}

            <nav>
                <ul class="pagination pagination-rounded justify-content-center mb-0">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>


        @include('admin.layout.footer')

    </div>
</div>
@endsection
