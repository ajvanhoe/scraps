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
  <a href="https://coinmarketcap.com/" target="_blank">CoinMarketCap</a>
@endsection

@section('page_content')

	 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Coin</th>
                                        <th>Price $USD</th>
                                        <th>% 24h change</th>
                                        <th>% 7d change</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($cmcap as $coin)

                                    <tr class="gradeA">
                                        <td>{{ $coin->rank }}</td>
                                        <td>
                                          <img src="https://files.coinmarketcap.com/static/img/coins/16x16/{{$coin->id}}.png">
                                          &nbsp;&nbsp;
                                          <a href="/coins/{{$coin->id}}">  
                                            {{ $coin->name }}
                                          </a>
                                        </td>


                                        <td>
                                          <a href="https://coinmarketcap.com/currencies/{{$coin->id}}/" target="_blank">  
                                          {{ $coin->price_usd }}
                                          </a>
                                        </td>

                                        @if ($coin->percent_change_24h < 0)
                                        <td class="center">
                                          <span style="color:red;">
                                           {{ $coin->percent_change_24h }} % 
                                          </span>
                                        </td>
                                        @else
                                        <td class="center">
                                          <span style="color:green;"> 
                                            {{ $coin->percent_change_7d }} % 
                                          </span>
                                        </td> 
                                        @endif   
                                        

                                        @if ($coin->percent_change_7d < 0)
                                        <td class="center">
                                          <span style="color:red;">
                                           {{ $coin->percent_change_7d }} % 
                                          </span>
                                        </td>
                                        @else
                                        <td class="center">
                                          <span style="color:green;"> 
                                            {{ $coin->percent_change_7d }} % 
                                          </span>
                                        </td> 
                                        @endif   


                                    </tr>
                                                                   
                                  @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->




@endsection

@section('more')

  <div class="well">
    <h4>DataTables Usage Information</h4>
    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
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