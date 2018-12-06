@extends('layouts.app')



@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks</div>

                <div class="panel-body">
                   <h4> ovde detalji vezani za zadatke </h4>
						<p>dodati u kontroleru itd...</p>


                        <table class="table">
                        <tr class="active">
                            <td>Zadatak</td>
                            <td>Opis</td>
                            <td>Uradeno</td>


                        </tr>

                         @foreach ($tasks as $task)
                        
                           <tr>
                               <td>{{ $task->name }}</td>
                               <td>{{ $task->body }}</td>    
                               <td>
                                  
                                @if ($task->done == 'true')
                                   <button type="submit" name="false" class="btn btn-success btn-circle">gotov!</button>
                            
                                @else
                                    <button type="submit" name="true" class="btn btn-danger btn-circle">nije</button>
                            
                                @endif

                               </td>    
                           </tr>
                         @endforeach

                         </table>






						<a href="/home">nazad...</a>

                   
                </div>
            </div>
        </div>
    </div>

@endsection