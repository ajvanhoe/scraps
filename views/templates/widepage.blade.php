@extends('layouts.master')

@section('title')
	Cryptom
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
	            <div class="panel-heading">@yield('panelhead')</div>
	        	<div class="panel-body">
					
	        		@yield('page_content')


					<h5><a href="/home">back...</a></h5>
				</div>
			</div>
		</div>
	</div>











</div>
@endsection