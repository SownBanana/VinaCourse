@extends('admin.layout.app')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        @include('admin.layout.topbar')

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href={{ route('admin_home') }}>Vina School</a></li>
                                <li class="breadcrumb-item"><a href={{ route('admin_home') }}>Dashboard</a></li>
                                <li class="breadcrumb-item active">CRM</li>
                            </ol>
                        </div>
                        <h4 class="page-title">CRM</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-xl-3 col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-light">View</button>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0" title="Revenue">Active Users</h6>
                            <h3 class="mb-4 mt-2">324</h3>
                            <div id="spark3" class="apex-charts mb-3" data-colors="#f4516c"></div>

                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Last Month</h6>
                                    <p class="font-18 mb-0 text-success">+15%</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Current Month</h6>
                                    <p class="font-18 mb-0 text-danger">-6.87%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->
                <div class="col-xl-3 col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-light">View</button>
                            </div>
                            <h6 class="text-muted text-uppercase mt-0" title="Revenue">Expense Summary</h6>
                            <h3 class="mb-4 mt-2">$4,745.2</h3>
                            <div id="spark4" class="apex-charts mb-3" data-colors="#00c5dc"></div>

                            <div class="row text-center">
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Last Month</h6>
                                    <p class="font-18 mb-0">$7814</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-truncate d-block">Current Month</h6>
                                    <p class="font-18 mb-0">$4782.8</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-2">Recent Activity</h4>

                            <div data-simplebar style="max-height: 330px;">
                                <div class="timeline-alt pb-0">
                                    <div class="timeline-item">
                                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                            <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                            <p class="mb-0 pb-2">
                                                <small class="text-muted">5 minutes ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                            <small>Dave Gamache added
                                                <span class="font-weight-bold">Admin Dashboard</span>
                                            </small>
                                            <p class="mb-0 pb-2">
                                                <small class="text-muted">30 minutes ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                            <small>Send you message
                                                <span class="font-weight-bold">"Are you there?"</span>
                                            </small>
                                            <p class="mb-0 pb-2">
                                                <small class="text-muted">2 hours ago</small>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                        <div class="timeline-item-info">
                                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                            <small>Uploaded a photo
                                                <span class="font-weight-bold">"Error.jpg"</span>
                                            </small>
                                            <p class="mb-0 pb-2">
                                                <small class="text-muted">14 hours ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end timeline -->
                            </div> <!-- end slimscroll -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-3">Transactions</h4>

                            <div data-simplebar style="max-height: 320px; overflow-x: hidden;">
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Purchased Hyper Admin Template</a>
                                        <p class="mb-0 text-muted"><small>Today</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-danger font-weight-bold pr-2">-$489.30</span>
                                    </div>
                                </div>
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Payment received Bootstrap Marketplace</a>
                                        <p class="mb-0 text-muted"><small>Yesterday</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-success font-weight-bold pr-2">+$1578.54</span>
                                    </div>
                                </div>
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Freelance work - Shane</a>
                                        <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-success font-weight-bold pr-2">+$247.5</span>
                                    </div>
                                </div>
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Hire new developer for work</a>
                                        <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-danger font-weight-bold pr-2">-$185.14</span>
                                    </div>
                                </div>
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Money received from paypal</a>
                                        <p class="mb-0 text-muted"><small>28 Aug 2018</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-success font-weight-bold pr-2">+$684.45</span>
                                    </div>
                                </div>
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Zairo landing purchased</a>
                                        <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-danger font-weight-bold pr-2">-$21.00</span>
                                    </div>
                                </div>
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Purchased Ubold admin template</a>
                                        <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-danger font-weight-bold pr-2">-$32.89</span>
                                    </div>
                                </div>
                                <div class="row py-1 align-items-center">
                                    <div class="col-auto">
                                        <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-body">Interest received</a>
                                        <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-success font-weight-bold pr-2">+$784.55</span>
                                    </div>
                                </div>
                            </div> <!-- end slimscroll -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->

    @include('admin.layout.footer')

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
@endsection
