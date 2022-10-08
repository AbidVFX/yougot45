@extends('partials.admin')
@section('content')
    <div class="contents">
        <div class="crm sales">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row ">
                            <div class="col-lg-12">

                                <div class="breadcrumb-main">
                                    <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                                    <div class="breadcrumb-action justify-content-center flex-wrap">
                                        <div class="action-btn">

                                            <div class="form-group mb-0">
                                                <div class="input-container icon-left position-relative">
                                                    <span class="input-icon icon-left">
                                                        <span data-feather="calendar"></span>
                                                    </span>
                                                    <input type="text"
                                                        class="form-control form-control-default date-ranger"
                                                        name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                                    <span class="input-icon icon-right">
                                                        <span data-feather="chevron-down"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown action-btn">
                                            <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                                                id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="la la-download"></i> Export
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <span class="dropdown-item">Export With</span>
                                                <div class="dropdown-divider"></div>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-print"></i> Printer</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-file-pdf"></i> PDF</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-file-text"></i> Google Sheets</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-file-csv"></i> CSV</a>
                                            </div>
                                        </div>
                                        <div class="dropdown action-btn">
                                            <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                                                id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="la la-share"></i> Share
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                                <span class="dropdown-item">Share Link</span>
                                                <div class="dropdown-divider"></div>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-facebook"></i> Facebook</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-twitter"></i> Twitter</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-google"></i> Google</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-feed"></i> Feed</a>
                                                <a href="" class="dropdown-item">
                                                    <i class="la la-instagram"></i> Instagram</a>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                            <a href="" class="btn btn-sm btn-primary btn-add">
                                                <i class="la la-plus"></i> Add New</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ends: .row -->
                        <div class="row">
                            <div class="col-xxl-2">
                                <div class="row">
                                    <div class="col-xxl-12 col-md-5">
                                        <!-- Card 2 End  -->
                                        <div
                                            class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                                            <div>
                                                <div class="overview-content overview-content3">
                                                    <div class="d-flex">
                                                        <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-primary">
                                                            <img src="img/svg/customer.svg" alt="img" class="svg">
                                                        </div>
                                                        <div>
                                                            <h2><span id="catCount">
                                                                    {{ DB::table('categories')->get()->count() }}
                                                                </span></h2>
                                                            <p class="mb-3 mt-1">Total Categories</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-success"><i class="las la-arrow-up"></i>
                                                                    <strong>25%</strong></span>
                                                                <small>Realtime Data</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 End  -->
                                    </div>
                                    <div class="col-xxl-12 col-md-5">
                                        <!-- Card 1 -->
                                        <div
                                            class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                                            <div>
                                                <div class="overview-content overview-content3">
                                                    <div class="d-flex">
                                                        <div
                                                            class="revenue-chart-box__Icon mr-20 order-bg-opacity-secondary">
                                                            <img src="img/svg/revenue.svg" alt="img" class="svg">
                                                        </div>
                                                        <div>
                                                            <h2>$67.5k</h2>
                                                            <p class="mb-3 mt-1">Sales Revenue</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-success"><i
                                                                        class="las la-arrow-up"></i>
                                                                    <strong>25%</strong></span>
                                                                <small>Since last week</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card 1 End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    function getTotalCategoryCount() {

        $.ajax({
                type: "GET",
                url: "{{ url('/getTotalCategoryCount') }}"
            })
            .done(function(data) {
                $('#catCount').html(data);
                setTimeout(getTotalCategoryCount, 1000);
            });
    }
    getTotalCategoryCount();
</script>
