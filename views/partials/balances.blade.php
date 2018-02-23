
                  
             <div class="row">
                     <div class="col-md-8">

                        <div class="list-group">
                        @foreach($coins as $coin)

                        <a href="/coins/{{$coin->id}}" class="list-group-item">
                          
                        <!-- <a href="coins/{{$coin->id}}" class="list-group-item"> -->

                          <img src="../images/logosvg/{{$coin->symbol}}.svg" class="img-rounded" style="width:20px;height:20px;">&nbsp;&nbsp; 



                           {{$coin->name}}
                         <span class="pull-right text-muted small"> 
                          &nbsp;&nbsp;&nbsp;{{$coin->symbol}}
                         </span>
                         <span class="badge"><em>{{$coin->balance}}</em></span>
                           <!--<span class="pull-right text-muted small"><em>{{$coin->balance}}</em><span>-->
                         </a>   
                        @endforeach

                        </div>
                         <!-- /.list-group -->
                      </div>


                    <div class="col-md-4">
                        
                    </div>
            </div>




                         