<?php
require_once 'core/init.php';

// instanca baze
$db = DB::getInstance();

$clanovi_grupe = [];
$nosilac_polise = [];

if(Input::exists('get')) {

    $id = (int)Input::get('grupa');

    // podaci iz baze na osnovu id-ja
    if($db->get('polise', ['id', '=', $id])) {
        $nosilac_polise = $db->first();
    }

    if($db->get('grupe', ['polise_id', '=', $id])){
        $clanovi_grupe = $db->results();
    }    

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
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
            <li class="nav-item">
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

    <div class="row mb-3 justify-content-center">
        <div class="col-md-8">
        <h4>Pregled grupe</h4>
        <hr>
        <p>Datum polaska: <?php echo $nosilac_polise->polazak ?></p>
        <p>Datum povratka: <?php echo $nosilac_polise->dolazak ?></p>
        <p>Broj dana: <?php echo $nosilac_polise->broj_dana ?></p>
        <p><small>uneto: <?php echo $nosilac_polise->datum_unosa ?></small></p>
        </div>
    </div>
    <hr>          
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h5>Nosilac polise</h5>
            <hr>
            <p>Ime: <?php echo $nosilac_polise->ime ?></p>
            <p>Prezime: <?php echo $nosilac_polise->prezime ?></p>
            <p>Datum rođenja: <?php echo $nosilac_polise->rodjen ?></p>
            <p>Broj pasoša: <?php echo $nosilac_polise->pasos ?></p>
        </div>

        <div class="col-md-4">
            <h5>Članovi grupe</h5>
            <hr>
            <?php
            foreach($clanovi_grupe as $clan) { ?>
            <p>Ime: <?php echo $clan->ime ?></p>
            <p>Prezime: <?php echo $clan->prezime ?></p>
            <p>Datum rođenja: <?php echo $clan->rodjen ?></p>
            <p>Broj pasoša: <?php echo $clan->pasos ?></p>
            <hr>
            <?php
                }
            ?>

        </div>
    </div>


  </div> <!-- /.container -->
</div> <!-- /.bg-custom -->

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
      $('#dataTable').dataTable();
  });
</script>

</body>
</html>