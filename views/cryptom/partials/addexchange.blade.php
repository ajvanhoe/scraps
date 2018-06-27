<div class="row">

    
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj novu menjacnicu</div>

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
    

		 <div class="col-md-2">
            <div class="panel panel-default">

            	  <div class="panel-heading">
                      Podsetnik      
                  </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">

                            <div class="list-group">
                               Dodati checkbox za aktivnu ili ne
                            </div>
                            <div class="list-group">
                               dodati input polje za api
                            </div>
                            <!-- /.list-group -->

                            
                       </div>


			</div>
		</div>

</div>