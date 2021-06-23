@extends('layouts.master')

@section('title','Login')


@section('header')
    @include('layouts.menubar')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('content')
<section class="content content_content" style="width: 100%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                <div class="row">
                  <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Smart Parking System
                                    <small class="pull-right">Date:<?php echo(Date('Y-M-d'));  ?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong>
                                      Smart Parking system
                                    </strong>
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>
                                        <?=  session()->get('USER')['name'] ?> </strong>
                                    <br>
                                  Email Address:
                                  <?=  session()->get('USER')['email'] ?>              </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #007612</b><br>
                                <br>
                                <b>Order ID:</b> 4F3S8J<br>
                                <b>Payment Due:</b> 2/22/2014<br>
                                <b>Account:</b> 968-34567
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Slot</th>
                                            <th>Arrival date</th>
                                             <th>Leave date</th>
                                            <th>Total amount</th>
                                            <th>Discount</th>
                                            <th>Total paidamount</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($bill as $value)
                                      <tr>
                                            <td>{{$value->slot_id}}</td>
                                            <td>{{$value->start_date}}</td>
                                            <td>{{$value->start_date}}</td>
                                            <td>{{$value->totalamount}}</td>
                                            <td>{{$value->discount}}</td>
                                            <td>{{$value->paidamount}}</td>
                                        </tr>
                                        @endforeach

                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <p class="lead">Amount Due <?php echo(Date('Y-M-d'));  ?></p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                          @php
                                          $count = 0
                                          @endphp
                                          @foreach($bill as $value)
                                          <?php $count = $count + $value->paidamount;?>
                                          @endforeach
                                            <tr>
                                                <th>Total:</th>
                                                <td> <?php echo $count;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <button class="btn btn-primary pull-right" style="margin-right: 5px;" id="generatepdf"><i class="fa fa-download"></i> Generate PDF</button>
                            </div>
                        </div>
                    </section>
                </section>
              </div>
            </div>
@endsection
@section('scripts')
        <script type="text/javascript" src="/js/generatepdf.js"></script>
@endsection
