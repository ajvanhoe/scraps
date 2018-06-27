@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You're now logged in!
                    <br>

                    <!-- linkovi   -->
                    
             <a href="https://coinmarketcap.com/" target="_blank"><h4><i class="fa fa-arrow-circle-right"></i> Coinmarketcap</h4></a>
             <a href="https://cryptowat.ch/" target="_blank"><h4><i class="fa fa-arrow-circle-right"></i> Cryptowatch</h4></a>
             <a href="https://www.cryptocompare.com/" target="_blank"><h4><i class="fa fa-arrow-circle-right"></i> Cryptocompare</h4></a>





                        
                </div>
            </div>
        </div>
    </div>

  @include('partials.homepanels')




</div>
@endsection
