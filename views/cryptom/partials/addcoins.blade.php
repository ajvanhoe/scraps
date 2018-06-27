  <div class="col-md-3 col-md-offset-2">
    <div class="panel panel-default">
        <!-- Panel heading -->
      <div class="panel-heading">Dodaj novi coin</div>
          <!-- Panel body -->
        <div class="panel-body">
              <!-- Form -->
                <form method="POST" action="/coins">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <label for="name">Coin</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="ime novcica">
                  </div>

                  <div class="form-group">
                    <label for="symbol">Simbol</label>
                        <input type="text" class="form-control" id="symbol" name="symbol" placeholder="simbol">
                  </div>


                   <div class="form-group">
                    <label for="balance">trenutni balans</label>
                        <input type="number" step="0.00000001" min="0.00000000" max="10000000.00000000"
                        class="form-control" id="balance" name="balance" placeholder="balance">
                  </div>

                 
                 

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

        </div>
    </div>
  </div>

