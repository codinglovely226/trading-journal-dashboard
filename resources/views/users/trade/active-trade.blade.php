@extends('layouts.app')
@section('title')
    <title>My Trades | Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/daterange-picker.css">
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Active Trades</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       
                                <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Active Trades</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-3">
                            <h5 class="mb-3">Active Trades Page</h5>
                            <!-- <div class="row form theme-form mt-3">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <p class="col-sm-3 text-end pt-3 mt-0">Date Filter:</p>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="reportrange" type="text">
                                        </div>
                                        <div class="col-sm-4 dropdown-basic text-end">
                                            <div class="dropdown mb-0">
                                                <div class="btn-group mb-0">
                                                    <button class="dropbtn btn-secondary btn-round" type="button">Export <span><i class="icofont icofont-airplane"></i></span></button>
                                                    <div class="dropdown-content"><a href="#">Print</a><a href="#">As PDF</a><a href="#">As CSV</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-body table-responsive">
                            <table class="display" id="advance-12">
                                <thead>
                                    <tr>
                                        <th class="text-center">Trade No</th>
                                        <th class="text-center">Symbol:</th>
                                        <th class="text-center">Long/Short</th>
                                        <th class="text-center">Trade Duration</th>
                                        <th class="text-center">Trade open date</th>
                                        <th class="text-center">Trade open price</th>
                                        <th class="text-center">Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">GBP/USD</td>
                                        <td class="text-center">Buy</td>
                                        <td class="text-center">3 Hours 55Mins</td>
                                        <td class="font-success text-center">+$320.00</td>
                                        <td class="font-success text-center">2%</td>
                                        <td class="text-center"><a href="#">Edit</a><br/><a href="#">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">EUR/USD</td>
                                        <td class="text-center">Sell</td>
                                        <td class="text-center">3 Hours 55Mins</td>
                                        <td class="font-secondary text-center">-$320.00</td>
                                        <td class="font-secondary text-center">2%</td>
                                        <td class="text-center"><a href="#">Edit</a><br/><a href="#">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">USD/CAD</td>
                                        <td class="text-center">Buy</td>
                                        <td class="text-center">3 Hours 55Mins</td>
                                        <td class="font-success text-center">+$320.00</td>
                                        <td class="font-success text-center">2%</td>
                                        <td class="text-center"><a href="#">Edit</a><br/><a href="#">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">AUD/USD</td>
                                        <td class="text-center">Sell</td>
                                        <td class="text-center">3 Hours 55Mins</td>
                                        <td class="font-secondary text-center">+$320.00</td>
                                        <td class="font-secondary text-center">2%</td>
                                        <td class="text-center"><a href="#">Edit</a><br/><a href="#">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('script')
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterangepicker.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>
@endsection