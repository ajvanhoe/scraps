@extends('layouts.app')


@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Exchanges:</div>
                <div class="panel-body">
                  
                    <table class="table">
                        <tr class="active">
                            <td>Menjacnica</td>
                            <td>URL</td>
                            <td>Email</td>
                            <td>Active</td>

                        </tr>
                        @foreach ($exchanges as $exchange)
                        
                           <tr>
                               <td>{{ $exchange->name }}</td>
                               <td><a href="{{ $exchange->url }}" target="_blank">{{ $exchange->url }}</a></td>    
                               <td>{{ $exchange->email }}</td> 

                               @if($exchange->active ==='true')   
                               <td>&nbsp <i class="fa fa-check-circle"></i></td>  
                               @else
                               <td>&nbsp <i class="fa fa-times-circle"></i></td>
                               @endif

                           </tr>
                         @endforeach

                     </table>   

						


					<a href="/home">nazad...</a>
                
                </div>
            </div>
        </div>
    </div>


    @include('partials.addexchange')

@endsection