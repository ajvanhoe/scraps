
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
                                        <!--  <img src="https://files.coinmarketcap.com/static/img/coins/16x16/{{$coin->id}}.png"> -->
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
                                            {{ $coin->percent_change_24h }} % 
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



