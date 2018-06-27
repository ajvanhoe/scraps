@extends('layouts.page')


@section('panelhead')
Coin			
@endsection



@section('page_content')

	<div class="row">

		<div class="col-md-4">

			
				<!-- 

          <div class="page-header">

          <img src="..." alt="image" class="img-thumbnail"> 

          </div>
        -->

        <!--
       <img src="images/logosvg/BTC.svg" class="img-rounded" style="width:50px;height:50px;">&nbsp;&nbsp; -->

         <!--

       <a href="http://cryptocoin.cc/table.php?cryptocoin="
        target="_blank" > 
      -->

      
       <img src="/images/logosvg/BTC.svg" class="img-rounded" style="width:70px;height:70px;">


       </a>
       <hr>



			
			<p>Price: <i class="fa fa-usd"> 1111</i><p>
			<a href="https://coinmarketcap.com/" target="_blank"><i class="fa fa-arrow-circle-right"></i> Coinmarketcap</a>



      
      	</div>
      	
      	
      	<div class="col-md-8">

      		<!-- 	Balances: 	-->

      		<h5>Balances:</h5>
      		<hr>

      		<dl class="row" style="font-size:12px;">
			 
			
			  <dt class="col-sm-3">Coinexchange:</dt>
			  <dd class="col-sm-9">
			  	balans, cena, promena
			  </dd>

			  <dt class="col-sm-3">Cryptopia:</dt>
			  <dd class="col-sm-9">
			    balans, cena, promena
			  </dd>


			  <dt class="col-sm-3">Gate:</dt>
			  <dd class="col-sm-9">
			  	Etiam porta sem malesuada magna mollis euismod.
			  </dd>

			  <dt class="col-sm-3">HitBTC:</dt>
			  <dd class="col-sm-9">
			  	Etiam porta sem malesuada magna mollis euismod.
			  </dd>


			  <dt class="col-sm-3">Local Balance:</dt>
			  <dd class="col-sm-9">
			  	Etiam porta sem malesuada magna mollis euismod.
			  </dd>
 			</dl>

 			<hr>

 			<!-- 	Total 	-->
 			<dl class="row">
 				<dt class="col-sm-3">Total:</dt>
				<dd class="col-sm-9">
			  	Etiam porta sem malesuada magna mollis euismod.
			  	</dd>
 			</dl>


      	</div>

	</div>


	<div class="col-md-12">
 		<hr>
     <div class="well">

                     <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="warning">
                                        <th>Rank</th>
                                        <th>Coin</th>
                                        <th>Price USD</th>
                                        <th>% 24h change</th>
                                        <th>% 7d</th>
                                    </tr>
                                </thead>
                                <tbody>


                                 
                                </tbody>
                            </table>

          <!--
	        			 <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Exchange</th>
                                        <th>Balance</th>
                                        <th>Last price</th>
                                        <th>24h change</th>
                                        <th>All time high</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr class="success">
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                        <td>$321.33</td>
                                    </tr>
                                   
                                </tbody>
                            </table> -->
                          </div> <!-- /. table -->



       <p>............ovde grafikon............</p>
      </div>
    </div>

@endsection