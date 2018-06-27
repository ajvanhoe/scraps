  <div class="col-md-3">
    <div class="panel panel-default">
        <!-- Panel heading -->
      <div class="panel-heading">Dodaj novi zadatak</div>
          <!-- Panel body -->
        <div class="panel-body">
              <!-- Form -->
                <form method="POST" action="/tasks">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <label for="name">Zadatak</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="ime zadatka">
                  </div>

                  <div class="form-group">
                    <label for="text">Opis</label>
                        <input type="text" class="form-control" id="body" name="body" placeholder="kratak opis obaveze">
                  </div>

                  <div class="checkbox">
                  <label for="done" class="checkbox-inline">Uradjeno?</label>
                    <label class="checkbox-inline">
                       &nbsp&nbsp<input id="done" name="done" type="checkbox">
                    </label>
                    
                   </div>
                 

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

        </div>
    </div>
  </div>

