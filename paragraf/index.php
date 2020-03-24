<?php
require_once 'core/init.php';

if (Session::exists('poruka'))
{
  $poruka = Session::flash('poruka'); 
}

if (Session::exists('greske')) {
  $greske = Session::flash('greske');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Paragraf Lex</title>

    
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<div class="bg-light">
  <header>
      <nav class="navbar navbar-dark text-white bg-dark navbar-expand-sm">
        <div class="container">
          <a class="navbar-brand" href="">Paragraf Lex</a>

              <ul class="navbar-nav ml-auto">
                <li><span class="badge badge-primary" id="message"></span></li>
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Unos polise</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pregled.php">Pregled polisa</a>
                </li>
              </ul>
        </div>
      </nav>
  </header>

  <div class="container" id="main">

      <!-- obicne poruke -->
    <div class="row justify-content-center">
      <?php if(isset($poruka)) { ?>
        <div class="alert alert-dark" role="alert">
      <?php echo $poruka;  ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
    </div>

        <!-- Greske u validaciji -->
    <div class="row justify-content-center">
      <?php if(isset($greske)) { 
        foreach($greske as $greska) {
        ?>
        <div class="alert alert-dark" role="alert">
      <?php echo $greska;  ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php }} ?>
    </div>

                  
    <div class="row">

      <div class="col-md-8 offset-2">

      <div class="card text-center">
        <div class="card-header">
         <strong>Unos novog putnog osiguranja</strong>
        </div>
        <div class="card-body">


  <form method="POST" action="obrada.php" id="unos" name="unos">
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="ime"><strong>Ime</strong></label>
        <input type="text" class="form-control" id="ime" name="ime" placeholder="Ime" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4"><strong>Prezime</strong></label>
        <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Prezime" required>
      </div>
  </div>

  <div class="form-group row">
    <label for="rodjen" class="col-2 col-form-label"><strong>Datum rođenja</strong></label>
    <div class="col-10">
      <input class="form-control" type="date" name="rodjen" value="" id="rodjen" required>
    </div>
  </div>

  <div class="form-group">
    <label for="pasos"><strong>Pasoš</strong></label>
    <input type="text" class="form-control" id="pasos" name="pasos" placeholder="Broj pasoša" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="telefon"><strong>Telefon</strong></label>
      <div class="input-group">
      <div class="input-group-prepend">
          <span class="input-group-text" id="pozivni">+381 </span>
      </div>
      <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="Telefon">
      </div>
    </div>

    <div class="form-group col-md-6">
      <label for="pasos"><strong>Email</strong></label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="polazak" class="col-2 col-form-label"><strong>Polazak</strong></label>
    <div class="col-10">
      <input class="form-control" type="date" name="polazak" value="<?php echo date_create('now')->format('Y-m-d') ?>" id="polazak" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="polazak" class="col-2 col-form-label"><strong>Povratak</strong></label>
    <div class="col-10">
      <input class="form-control" type="date" name="dolazak" value="<?php echo date_create('+1 day')->format('Y-m-d') ?>" id="dolazak" required>
    </div>
  </div>

  <div class="form-check form-check-inline my-2 py-3">
     <input class="form-check-label" type="radio" name="grupa" value="0" onclick="naKlik(this)" checked>
     <label class="form-check-label" for="osoba">Pojedinačno</label>
  </div>
  <div class="form-check form-check-inline my-2 py-3">
     <input class="form-check-input" type="radio" name="grupa" value="1" id="group" onclick="naKlik(this)"  >
     <label class="form-check-label" for="osoba">Grupno putovanje</label>
  </div>

   <hr>
  
  <div id="add-group"></div>

  <div class="text-center">
    <button style="display:none" type="button" class="btn btn-success btn-sm" id="add-field" onclick="dodajNovogClana()"><strong>+ Dodaj člana grupe</strong></button><br><hr />
  </div>
  

  <button type="submit" class="btn btn-primary btn-block">Sačuvaj podatke</a>
</form>


        </div>  <!-- /.card-body -->
        <div class="card-footer text-muted"></div>
      </div> <!-- /.card -->
      

      </div> 
</div> <!-- /.row -->

  </div> <!-- /.container -->
</div> <!-- /.bg-custom -->

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="js/main.js" ></script>

</body>
</html>