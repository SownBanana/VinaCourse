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
                                <li class="breadcrumb-item"><a href={{ route('user') }}>Thông tin tải khoàn</a></li>
                                <li class="breadcrumb-item active">Thông tin tải khoàn</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thông tin tải khoàn</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="card cta-box bg-white">
                        <table class="table table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Date of Birth</th>
                                    <th>Active?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Risa D. Pearson</td>
                                    <td>336-508-2157</td>
                                    <td>July 24, 1950</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch1" checked data-switch="success"/>
                                            <label for="switch1" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ann C. Thompson</td>
                                    <td>646-473-2057</td>
                                    <td>January 25, 1959</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch2" checked data-switch="success"/>
                                            <label for="switch2" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul J. Friend</td>
                                    <td>281-308-0793</td>
                                    <td>September 1, 1939</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch3" data-switch="success"/>
                                            <label for="switch3" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Linda G. Smith</td>
                                    <td>606-253-1207</td>
                                    <td>May 3, 1962</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch4" data-switch="success"/>
                                            <label for="switch4" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Risa D. Pearson</td>
                                    <td>336-508-2157</td>
                                    <td>July 24, 1950</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch1" checked data-switch="success"/>
                                            <label for="switch1" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ann C. Thompson</td>
                                    <td>646-473-2057</td>
                                    <td>January 25, 1959</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch2" checked data-switch="success"/>
                                            <label for="switch2" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul J. Friend</td>
                                    <td>281-308-0793</td>
                                    <td>September 1, 1939</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch3" data-switch="success"/>
                                            <label for="switch3" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Linda G. Smith</td>
                                    <td>606-253-1207</td>
                                    <td>May 3, 1962</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch4" data-switch="success"/>
                                            <label for="switch4" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Risa D. Pearson</td>
                                    <td>336-508-2157</td>
                                    <td>July 24, 1950</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch1" checked data-switch="success"/>
                                            <label for="switch1" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ann C. Thompson</td>
                                    <td>646-473-2057</td>
                                    <td>January 25, 1959</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch2" checked data-switch="success"/>
                                            <label for="switch2" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul J. Friend</td>
                                    <td>281-308-0793</td>
                                    <td>September 1, 1939</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch3" data-switch="success"/>
                                            <label for="switch3" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Linda G. Smith</td>
                                    <td>606-253-1207</td>
                                    <td>May 3, 1962</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch4" data-switch="success"/>
                                            <label for="switch4" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- pagination  --}}
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
                <!-- end col-->

                <div class="col-xl-4 col-lg-6 mt-3">
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
                            <h4 class="header-title mb-4">Recent Leads</h4>

                            <div class="media">
                                <img class="mr-3 rounded-circle" src="/admin/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                                <div class="media-body">
                                    <span class="badge badge-warning-lighten float-right">Cold lead</span>
                                    <h5 class="mt-0 mb-1">Risa Pearson</h5>
                                    <span class="font-13">richard.john@mail.com</span>
                                </div>
                            </div>

                            <div class="media mt-3">
                                <img class="mr-3 rounded-circle" src="/admin/images/users/avatar-3.jpg" width="40" alt="Generic placeholder image">
                                <div class="media-body">
                                    <span class="badge badge-danger-lighten float-right">Lost lead</span>
                                    <h5 class="mt-0 mb-1">Margaret D. Evans</h5>
                                    <span class="font-13">margaret.evans@rhyta.com</span>
                                </div>
                            </div>

                            <div class="media mt-3">
                                <img class="mr-3 rounded-circle" src="/admin/images/users/avatar-4.jpg" width="40" alt="Generic placeholder image">
                                <div class="media-body">
                                    <span class="badge badge-success-lighten float-right">Won lead</span>
                                    <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                                    <span class="font-13">bryuellen@dayrep.com</span>
                                </div>
                            </div>

                            <div class="media mt-3">
                                <img class="mr-3 rounded-circle" src="/admin/images/users/avatar-5.jpg" width="40" alt="Generic placeholder image">
                                <div class="media-body">
                                    <span class="badge badge-warning-lighten float-right">Cold lead</span>
                                    <h5 class="mt-0 mb-1">Kathryn S. Collier</h5>
                                    <span class="font-13">collier@jourrapide.com</span>
                                </div>
                            </div>

                            <div class="media mt-3">
                                <img class="mr-3 rounded-circle" src="/admin/images/users/avatar-1.jpg" width="40" alt="Generic placeholder image">
                                <div class="media-body">
                                    <span class="badge badge-warning-lighten float-right">Cold lead</span>
                                    <h5 class="mt-0 mb-1">Timothy Kauper</h5>
                                    <span class="font-13">thykauper@rhyta.com</span>
                                </div>
                            </div>

                            <div class="media mt-3">
                                <img class="mr-3 rounded-circle" src="/admin/images/users/avatar-6.jpg" width="40" alt="Generic placeholder image">
                                <div class="media-body">
                                    <span class="badge badge-success-lighten float-right">Won lead</span>
                                    <h5 class="mt-0 mb-1">Zara Raws</h5>
                                    <span class="font-13">austin@dayrep.com</span>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-xl-4 col-lg-6 mt-3">
                    <div class="card cta-box bg-primary text-white">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i>&nbsp;</h2>
                                    <h3 class="m-0 font-weight-normal cta-box-title">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right"></i></h3>
                                </div>
                                <img class="ml-3" src="/admin/images/email-campaign.svg" width="120" alt="Generic placeholder image">
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->

                    <!-- Todo-->
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
                            <h4 class="header-title mb-2">Todo</h4>

                            <div class="todoapp">
                                <div data-simplebar style="max-height: 224px">
                                    <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                                </div>
                            </div> <!-- end .todoapp-->

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->

                </div>
                <!-- end col -->
            </div>
            <!-- end row-->
        </div>


        @include('admin.layout.footer')
    </div>

</div>

@endsection
