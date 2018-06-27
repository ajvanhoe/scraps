<div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">
                      <i class="fa fa-bitcoin"></i> Coins     
                 </div>
                 <!-- /.panel-heading -->

                 <div class="panel-body">
                    <div class="row">
                     <div class="col-md-8">
                        <div class="list-group">
                        @foreach($coins as $coin)

                        <a href="https://coinmarketcap.com/currencies/{{$coin->name}}/" target="_blank" class="list-group-item">
                          
                        <!-- <a href="coins/{{$coin->id}}" class="list-group-item"> -->

                          <img src="images/logosvg/{{$coin->symbol}}.svg" class="img-rounded" style="width:20px;height:20px;">&nbsp;&nbsp; 



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


                         <a href="/coins/" class="btn btn-default btn-block">View All Coins</a>
                         <br>
                         <a href="/create">dodaj... </a>
                     </div>

                     
                    <div class="col-md-4">
                      
                    </div>
                

                    </div>
                         <!-- /.Panel inner row -->
                    
                </div>
                <!-- /.Panel body -->

            </div>
            <!--/. Panel -->
          </div>
</div> <!--/. Row -->