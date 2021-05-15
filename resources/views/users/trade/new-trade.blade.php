@extends('layouts.app')
@section('title')
<title>New Trade | Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select2.css">
    <style>
        .before_preview img, .after_preview img{
            max-width: 320px;
            max-height: 240px;
            border: 1px solid;
            padding: 5px;
            border-radius: 10px;
            margin: 5px;
        }
    </style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>New Trade</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">New Trade</li>
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
                    <div class="card-header">
                        <h5>Trade Information</h5>
                    </div>
                    <form class="form theme-form" method="POST" action="{{ route('newtrade.create') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Start Data and Time</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" id="start_date" name="start_date" type="datetime-local" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">End Data and Time</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" id="end_date" name="end_date" type="datetime-local" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="validationTooltip04">Symbol</label>
                                        <div class="col-sm-9 select2-drpdwn">
                                            <select class="js-example-basic-single form-select" name="symbol_id" required>
                                            @foreach($symbols as $key => $symbol)
                                                @if( $key == 0 || $symbols[$key]->category != $symbols[$key-1]->category)
                                                    <optgroup label="{{ $symbol->category }}">
                                                @endif                                                
                                                    <option value="{{ $symbol->id }}">{{ $symbol->symbol }}</option>
                                                @if( $key == 107 || $symbols[$key]->category != $symbols[$key+1]->category)
                                                    </optgroup>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="validationTooltip04">Long or Short</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="long_short" required>
                                                <option selected="" disabled="" value="">Choose...</option>
                                                <option>LONG</option>
                                                <option>SHORT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Pips Profit or Loss</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="pips" name="pips" type="text" placeholder="Type here information" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Fees</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input class="form-control" type="number" id="fees" name="fees" aria-describedby="validationTooltipUsernamePrepend" data-bs-original-title="" title="" placeholder="Type here information" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Profit Gain/Loss</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input class="form-control" type="number" id="profit_gl" name="profit_gl" aria-describedby="validationTooltipUsernamePrepend" data-bs-original-title="" title="" placeholder="Type here information" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Percentage Gain/Loss On Account</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="percentage_gl" name="percentage_gl" autocomplete="off" placeholder="Type here information" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Open Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="open_price" name="open_price" autocomplete="off" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Close Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="close_price" name="close_price" autocomplete="off" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Before Image Upload</label>
                                        <div class="col-sm-9 before_input">
                                            <input class="form-control before_img_link" type="text" id="before_img_link_1" name="before_img_link_1">
                                            <input class="form-control mt-3 before_img_file" type="file" id="before_img_file_1" name="before_img_file_1">
                                            <a class="btn btn-success pull-right mt-3 m-l-5" id="add_before"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-primary pull-right mt-3" id="remove_before"><i class="fa fa-minus"></i></a>
                                            <input type="hidden" name="before_img_count" id="before_img_count" value="1">
                                        </div>
                                    </div>
                                    <div class="mb-3 row justify-content-center before_preview"></div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">After Image Upload</label>
                                        <div class="col-sm-9 after_input">
                                            <input class="form-control after_img_link" type="text" id="after_img_link_1" name="after_img_link_1">
                                            <input class="form-control mt-3 after_img_file" type="file" id="after_img_file_1" name="after_img_file_1">
                                            <a class="btn btn-success pull-right mt-3 m-l-5" id="add_after"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-primary pull-right mt-3" id="remove_after"><i class="fa fa-minus"></i></a>
                                            <input type="hidden" name="after_img_count" id="after_img_count" value="1">
                                        </div>
                                    </div>
                                    <div class="mb-3 row justify-content-center after_preview"></div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" cols="5" id="description" name="description" placeholder="Default textarea" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@section('script')
<!-- <script src="../assets/js/dashboard/default.js"></script> -->
<script src="../assets/js/select2/select2.full.min.js"></script>
<script src="../assets/js/select2/select2-custom.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
<script src="../assets/js/trade/new-trade.js"></script>
@endsection
