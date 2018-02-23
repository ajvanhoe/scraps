@extends('layouts.page')

  
@section('page_styles')

 <!-- MetisMenu CSS -->
 <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
 <!-- DataTables CSS -->
 <link href="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
 <!-- DataTables Responsive CSS -->
 <link href="{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">


@endsection

@section('panelhead')
    <i class="fa fa-bitcoin"></i> Coins
@endsection

@section('page_content')
  <h5><a href="#">Your balances:</a></h5>
  
	 

  @include('partials.balances')


@endsection

@section('more')



<div class="row">
  <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
          <div class="panel-heading">
            <a href="https://coinmarketcap.com/" target="_blank"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;CoinMarketCap</a>
          </div>

          <div class="panel-body">

                <div class="well">
                  @include('partials.cointable')
                  <hr>
                  
                </div>

          </div>
    </div>  <!-- /. panel -->

  
  </div>
</div>
  
@endsection


@section('page_scripts')

  
   <!-- Metis Menu Plugin JavaScript -->
   <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>


   <!-- DataTables JavaScript -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>


    <script language="javascript">
      $(document).ready(function() {
          $('#dataTables-example').DataTable({
              responsive: true
          });
      });
    </script>



@endsection