  <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">

                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Tasks Panel
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">


                            <div class="list-group">
                                @foreach($tasks as $task)
                                <a href="tasks/{{$task->id}}" class="list-group-item">
                                    {{$task->name}}
                                    <span class="pull-right text-muted small"><em>{{$task->created_at}}</em>
                                    </span>
                                </a>
                                 @endforeach

                            </div>
                            <!-- /.list-group -->
                            <a href="tasks/" class="btn btn-default btn-block">View All Tasks</a>
                       </div>
                    <!-- /.panel-body -->

            </div>
        </div>

            <div class="col-md-4">
                <div class="panel panel-default">

                        <div class="panel-heading">
                         <i class="fa fa-exchange"></i> Exchanges
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                           <div class="list-group">
                              @foreach($exchanges as $exchange)
                                <a href="{{$exchange->url}}" target="_blank" class="list-group-item">
                                    {{$exchange->name}}

                                    @if ($exchange->active === 'true')
                                        <span class="pull-right text-muted small"><i class="fa fa-check-circle"></i>
                                        </span>
                                    @else
                                        <span class="pull-right text-muted small">
                                        <i class="fa fa-times-circle"></i>
                                        </span>
                                    @endif


                                    <!--
                                    <span class="pull-right text-muted small"><em>{{$exchange->active}}</em>
                                    </span> -->




                                </a>
                                 @endforeach
                           </div>
                            <!-- /.list-group -->

                            <a href="/exchanges/" class="btn btn-default btn-block">View All Exchanges</a>

                            <a href="/create">dodaj... </a>

                        </div>
                           <!-- /.panel-body -->
                 </div>
            </div>
    </div>

     
