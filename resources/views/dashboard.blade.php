@extends('layout.app')

@section('page-content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row " style="background-color: rgba(218,213,207,255)">
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Products</div>
                            <div class="text-lg fw-bold">{{ $productCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="calendar"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-dark stretched-link" href="{{ config('app_url') }}/products">View Products</a>
                    <div class="text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Physical sales</div>
                            <div class="text-lg fw-bold">{{ $physicalsalesCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="calendar"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-dark stretched-link" href="{{ config('app_url') }}/physicalsales">Physical sales</a>
                    <div class="text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-danger text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Online sales</div>
                            <div class="text-lg fw-bold">{{ $onlinesalesCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="calendar"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-dark stretched-link" href="{{ config('app_url') }}/onlinesales">Online sales</a>
                    <div class="text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>





        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card text-white h-100" style="background-color: gray">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Customers</div>
                            <div class="text-lg fw-bold">{{ $customersCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-dark stretched-link" href="{{ config('app_url') }}/customer">View Customers</a>
                    <div class="text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-dark text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Appointments</div>
                            <div class="text-lg fw-bold">{{ $appointmentCount }}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-dark stretched-link" href="{{ config('app_url') }}/appointments">View Appointments</a>
                    <div class="text-dark"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Earnings Breakdown
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample"
                            type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="text-gray-500" data-feather="more-vertical"></i></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                            aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#!">Last 12 Months</a>
                            <a class="dropdown-item" href="#!">Last 30 Days</a>
                            <a class="dropdown-item" href="#!">Last 7 Days</a>
                            <a class="dropdown-item" href="#!">This Month</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Custom Range</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Monthly Revenue
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample"
                            type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="text-gray-500" data-feather="more-vertical"></i></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                            aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#!">Last 12 Months</a>
                            <a class="dropdown-item" href="#!">Last 30 Days</a>
                            <a class="dropdown-item" href="#!">Last 7 Days</a>
                            <a class="dropdown-item" href="#!">This Month</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Custom Range</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                </div>
            </div>
        </div>
    </div>
@endsection
