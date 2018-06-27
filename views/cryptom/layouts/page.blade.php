@extends('layouts.master')

@section('title')
	Cryptom
@endsection

@section('styles')
	@yield('page_styles')
@endsection


@section('content')
<div class="container">
	<div class="row">
      
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
	            <div class="panel-heading">@yield('panelhead')</div>
	        	<div class="panel-body">
					

						@yield('page_content')
                         


					<h5><a href="/home">back...</a></h5>
				</div>
 

			</div>
		</div>
	</div>




@yield('more')					


</div>
@endsection

@section('footer')
	@yield('page_footer')
@endsection

@section('scripts')
	@yield('page_scripts')
@endsection
