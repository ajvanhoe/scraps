<?php
require_once 'core/init.php';

if (Session::exists('poruka'))
{
  $poruka = Session::flash('poruka'); 
}

// instanca baze
$db = DB::getInstance();

// pregled polisa
$sql = "SELECT * FROM polise";

if($db->direct_sql($sql)){
  $polise = $db->results();
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
            <li class="nav-item active">
              <a class="nav-link" href="pregled.php">Pregled polisa</a>
            </li>
          </ul>
              
        </div>
      </nav>
  </header>

  <div class="container" id="main">

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
                  
 <div class="row my-3">

  <div class="table-responsive bg-white px-4 py-4">
    <table class="table table-bordered table-hover" style="font-size:14px;" id="dataTable">
        <thead>
          <tr>
            <th scope="col">Datum unosa</th>
            <th scope="col">Osoba</th>
            <th scope="col">Rođen</th>
            <th scope="col">Broj pasoša</th>
            <th scope="col">Telefon</th>
            <th scope="col">Email</th>
            <th scope="col">Polazak</th>
            <th scope="col">Dolazak</th>
            <th scope="col">Broj dana</th>
            <th scope="col">Grupa</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Datum unosa</th>
            <th>Osoba</th>
            <th>Rođen</th>
            <th>Broj pasoša</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Polazak</th>
            <th>Dolazak</th>
            <th>Broj dana</th>
            <th>Grupa</th>
          </tr>
        </tfoot>
        <tbody>

            <?php
            if(isset($polise)) {
            foreach($polise as $polisa)  {
              echo '<tr>';  
                echo  '<td>'.$polisa->datum_unosa.'</td>';
                echo  '<td>'.$polisa->ime.' '.$polisa->prezime.'</td>';
                echo  '<td>'.$polisa->rodjen.'</td>';
                echo  '<td>'.$polisa->pasos.'</td>';
                echo  '<td>'.$polisa->telefon.'</td>';
                echo  '<td>'.$polisa->email.'</td>';
                echo  '<td>'.$polisa->polazak.'</td>';
                echo  '<td>'.$polisa->dolazak.'</td>';
                echo  '<td>'.$polisa->broj_dana.'</td>';
                if($polisa->grupa) {
                  echo '<td><a href="grupa.php?grupa='.$polisa->id.'" target="__blank">grupa</a></td>';
                 } else {
                   echo '<td> - </td>';
                 }  
              echo  '</tr>';  
            }
          } 
            
            ?>


        
        </tbody>
    </table>
    </div> <!-- /.table-responsive -->



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