@extends('layouts.app')

@section('title',"Transactions")

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}" />
@endsection

@section('content')
<div class="container mt-4">
    <div class="row"> 
      <!-- Middle Panel
      ============================================= -->
      <div class="col-lg-12">
        
        <h2 class="font-weight-400 mb-3">Transactions</h2>
        
        <!-- Filter
        ============================================= -->
        <div class="row">
          <div class="col mb-2">
            <form id="filterTransactions" method="post">
              <div class="form-row">
                <!-- Date Range
                ========================= -->
                <div class="col-sm-6 col-md-5 form-group">
                  <input id="dateRange" type="text" class="form-control" placeholder="Date Range">
                  <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span> 
                </div>
                <!-- All Filters Link
                ========================= -->
                {{-- <div class="col-auto d-flex align-items-center mr-auto form-group" data-toggle="collapse"> <a class="btn-link" data-toggle="collapse" href="#allFilters" aria-expanded="false" aria-controls="allFilters">Filtres<i class="fas fa-sliders-h text-1 ml-1"></i></a> </div> --}}
                
                <!-- All Filters collapse
                ================================ -->
                {{-- <div class="col-12 collapse mb-3" id="allFilters">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="allTransactions" name="allFilters" class="custom-control-input" checked>
                    <label class="custom-control-label" for="allTransactions">Toutes les transactions</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="paymentsSend" name="allFilters" class="custom-control-input">
                    <label class="custom-control-label" for="paymentsSend">Transactions envoyées</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="paymentsReceived" name="allFilters" class="custom-control-input">
                    <label class="custom-control-label" for="paymentsReceived">Transactons reçues</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="withdrawal" name="allFilters" class="custom-control-input">
                    <label class="custom-control-label" for="withdrawal">Retrait</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="deposit" name="allFilters" class="custom-control-input">
                    <label class="custom-control-label" for="deposit">Dépot</label>
                  </div>
                </div> --}}
                <!-- All Filters collapse End -->
              </div>
            </form>
          </div>
        </div>
        <!-- Filter End -->
        
        <!-- All Transactions
        ============================================= -->
        <div class="bg-light shadow-sm rounded py-4 mb-4">
          <h3 class="text-5 font-weight-400 d-flex align-items-center px-4 mb-3">All Transactions</h3>
          <!-- Title
          =============================== -->
          <div class="transaction-title py-2 px-4">
            <div class="row">
              <div class="col-2 col-sm-3 text-center"><span class="">Date</span></div>
              <div class="col col-sm-5">Informations</div>
              <div class="col-auto col-sm-2 d-none d-sm-block text-center">Type</div>
              <div class="col-3 col-sm-2 text-right">Montant</div>
            </div>
          </div>
          <!-- Title End -->
          
          <!-- Transaction List
          =============================== -->
          <div class="transaction-list">
            @foreach ($transactionsContent as $key => $item)
              <div class="transaction-item px-4 py-1" data-toggle="modal" data-target="#transaction-detail{{$key}}">
                <div class="row align-items-center flex-row">
                  <div class="col-auto col-sm-3 d-none d-sm-block text-center text-1"> <span class="text-success"
                    data-toggle="tooltip" data-original-title="Date de transaction">{{$item['created_at']}}</span>
                  </div>
                  <div class="col col-sm-5"> 
                    <span class="d-block text-1">{{$item['user']}} </span> 
                  </div>
                  <div class="col-2 col-sm-2 text-center"> 
                    <span class="d-block text-1 font-weight-300"><i class="{{$item["icon"]}}"></i></span> <span
                      class="d-block text-1 font-weight-300 text-uppercase">{{$item['type']}}</span> 
                  </div>
                  <div class="col-3 col-sm-2 text-right text-1"> <span class="text-nowrap">{{number_format($item['montant'], 2)}} </span> <span
                    class="text-2 text-uppercase">({{$data["devise"]}})</span> 
                  </div>                  

                </div>
              </div>
            @endforeach
          </div>
          <!-- Transaction List End -->
          
          <!-- Transaction Item Details Modal
          =========================================== -->
          <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered transaction-details" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="row no-gutters">
                    <div class="col-sm-5 d-flex justify-content-center bg-primary rounded-left py-4">
                      <div class="my-auto text-center">
                        <div class="text-17 text-white my-3"><i class="fas fa-building"></i></div>
                        <h3 class="text-1 text-white font-weight-400 my-3">Envato Pty Ltd</h3>
                        <div class="text-8 font-weight-500 text-white my-4">$557.20</div>
                        <p class="text-white">15 March 2019</p>
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <h5 class="text-5 font-weight-400 m-3">Transaction Details
                        <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                      </h5>
                      <hr>
                      <div class="px-3">
                        <ul class="list-unstyled">
                          <li class="mb-2">Payment Amount <span class="float-right text-1">$562.00</span></li>
                          <li class="mb-2">Fee <span class="float-right text-1">-$4.80</span></li>
                        </ul>
                        <hr class="mb-2">
                        <p class="d-flex align-items-center font-weight-500 mb-4">Total Amount <span class="text-1 ml-auto">$557.20</span></p>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Paid By:</li>
                          <li class="text-muted">Envato Pty Ltd</li>
                        </ul>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Transaction ID:</li>
                          <li class="text-muted">26566689645685976589</li>
                        </ul>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Description:</li>
                          <li class="text-muted">Envato March 2019 Member Payment</li>
                        </ul>
                        <ul class="list-unstyled">
                          <li class="font-weight-500">Status:</li>
                          <li class="text-muted">Completed</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Transaction Item Details Modal End -->
          <!-- Pagination
          ============================================= -->
          <ul class="pagination justify-content-center mt-4 mb-0">
            {{$transactions->links()}}
          </ul>
          <!-- Paginations end --> 
          
        </div>
        <!-- All Transactions End --> 
      </div>
      <!-- Middle End --> 
    </div>
  </div>
@endsection


@section('script')
    
<!-- Script --> 
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> 
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script> 
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script> 
<script>
$(function() {
 'use strict';
 
 // Date Range Picker
 $(function() {
    var start = moment().subtract(29, 'days');
    var end = moment();
    function cb(start, end) {
        $('#dateRange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#dateRange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
    cb(start, end);
});
});
</script> 
<script src="js/theme.js"></script>
@endsection