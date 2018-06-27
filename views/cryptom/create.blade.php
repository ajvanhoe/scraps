@extends('layouts.app')


@section('content')

		<!-- ** OPSTI CREATE FAJL ZA SVE FORME I INPUTE ** -->

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	 <div class="panel-heading">Meni</div>
	             	<div class="panel-body">
	            	 ovde ide meni za panele, namestiti da svaki ucitava zaseban prozor ispod...

	            	 <a href="/home"><h5>nazad...</h5></a>
                
	             	</div>
          	</div>
        </div>
     </div>
	



    <div class="row">
      <div class="col-md-3 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Dodaj Menjacnicu</div>
            <div class="panel-body">

			<form method="POST" action="/exchanges">
			  {{ csrf_field() }}

			  <div class="form-group">
			    <label for="name">Ime menjacnice</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="name">
			  </div>

			  <div class="form-group">
			    <label for="url">url</label>
	            <input type="text" class="form-control" id="url" name="url" placeholder="URL">
			  </div>

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
			  </div>


			 <div class="form-group">
			    <label for="zapo">Zaporka</label>
			    <input type="text" class="form-control" name="zapo" id="zapo" placeholder="Zaporka">
  			 </div>

  			 	 <div class="form-group">
			    <label for="zap">Druga zaporka</label>
			    <input type="text" class="form-control" name="zap" id="zap" placeholder="Druga zaporka">
  			 </div>
		  
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
					
            </div>
        </div>
      </div>

   @include('partials.addtask')


    </div>
    <!-- ./ END ROW -->


@endsection