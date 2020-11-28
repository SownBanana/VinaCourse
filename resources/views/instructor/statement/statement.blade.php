@extends('layout.app')
@section('active-statement', 'active')
@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Statement</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>

                    <li class="breadcrumb-item active">

                        Statement

                    </li>

                </ol>

            </div>
        </div>

    </div>
</div>



<div class="container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Transactions</div>
    </div>
    <div class="card mb-0">
        <div class="card-header d-flex align-items-center">
            <strong class="card-title">Statement</strong>
            <div class="flatpickr-wrapper flatpickr-calendar-right d-flex ml-auto">
                <div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                    <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 to 20/03/2018</a>
                    <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                </div>
            </div>
        </div>

        <div data-toggle="lists" data-lists-values='[
"js-lists-values-course", 
"js-lists-values-document",
"js-lists-values-amount",
"js-lists-values-date"
]' data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" class="table-responsive">
            <table class="table table-flush table-nowrap">
                <thead>
                    <tr>
                        <th colspan="2">
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Course</a>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-document">Document</a>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-amount">Amount</a>
                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Date</a>
                        </th>
                    </tr>
                </thead>
                <tbody class="list">




                    <tr>
                        <td>
                            <div class="d-flex flex-nowrap align-items-center">
                                <a href="instructor-edit-course" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                    <img src="assets/images/paths/angular_routing_200x168.png" alt="course" class="avatar-img rounded">
                                    <span class="overlay__content"></span>
                                </a>
                                <div class="flex">
                                    <a class="card-title js-lists-values-course" href="instructor-edit-course">Angular Routing In-Depth</a>
                                    <div class="card-subtitle text-muted mr-1">
                                        Invoice
                                        <a href="invoice" style="color: inherit;" class="js-lists-values-document">#8734</a> -
                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="d-flex flex-nowrap align-items-center">
                                <a href="instructor-edit-course" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                    <img src="assets/images/paths/angular_testing_200x168.png" alt="course" class="avatar-img rounded">
                                    <span class="overlay__content"></span>
                                </a>
                                <div class="flex">
                                    <a class="card-title js-lists-values-course" href="instructor-edit-course">Angular Unit Testing</a>
                                    <div class="card-subtitle text-muted mr-1">
                                        Invoice
                                        <a href="invoice" style="color: inherit;" class="js-lists-values-document">#8735</a> -
                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="d-flex flex-nowrap align-items-center">
                                <a href="instructor-edit-course" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                    <img src="assets/images/paths/typescript_200x168.png" alt="course" class="avatar-img rounded">
                                    <span class="overlay__content"></span>
                                </a>
                                <div class="flex">
                                    <a class="card-title js-lists-values-course" href="instructor-edit-course">Introduction to TypeScript</a>
                                    <div class="card-subtitle text-muted mr-1">
                                        Invoice
                                        <a href="invoice" style="color: inherit;" class="js-lists-values-document">#8736</a> -
                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="d-flex flex-nowrap align-items-center">
                                <a href="instructor-edit-course" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                    <img src="assets/images/paths/angular_200x168.png" alt="course" class="avatar-img rounded">
                                    <span class="overlay__content"></span>
                                </a>
                                <div class="flex">
                                    <a class="card-title js-lists-values-course" href="instructor-edit-course">Learn Angular Fundamentals</a>
                                    <div class="card-subtitle text-muted mr-1">
                                        Invoice
                                        <a href="invoice" style="color: inherit;" class="js-lists-values-document">#8737</a> -
                                        &dollar;<span class="js-lists-values-amount">89</span> USD
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">


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
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection