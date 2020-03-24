<?php
require_once 'core/init.php';

// instanca baze
$db = DB::getInstance();

// obrada 
if(Input::exists('post')) {

   // validacija 
   $validate = new Validate();
   $validation = $validate->check($_POST, array(
        'ime' => [
            'required' => true,
            'min' => 2,
            'max' => 50,
        ],

        'prezime' => [
            'required' => true,
            'min' => 2,
            'max' => 50,
        ],

        'rodjen' => [
            'required' => true,
        ],

        'pasos' => [
            'required' => true,
        ],

        'email' => [
            'required' => true,
        ],

        'polazak' => [
            'notafter' => Input::get('dolazak'),
        ]


    ));

    // rezultat validacije
    if (!$validation->passed()) {
        Session::put('greske', $validation->errors());
        Redirect::to('index.php');
    }
    
    // ukoliko je validacija prosla prelazi na unos u bazu
    $polja_u_bazi = ['ime', 'prezime', 'rodjen', 'pasos', 'telefon', 'email', 'grupa', 'polazak', 'dolazak'];
    $forma = [];
            
    // priprema arej za ubacivanje
    foreach($polja_u_bazi as $polje) {
       $forma[$polje] = Input::get($polje);
    }

    // datumi
    $razlika = date_diff( date_create(Input::get('polazak')), date_create(Input::get('dolazak')) );
    $forma['broj_dana'] = $razlika->days;
    $forma['datum_unosa'] = date("Y-m-d");
    
    //insert u bazu 
    if($db->insert('polise', $forma)){
    
        // ubacivanje grupe - ako je odabrano grupno (bool)
        if(Input::get('grupa')) {

            // id pod kojim se vodi grupa
            $lastId = (int)$db->lastId();

            // sve na gomili sa input-a
            $imena = Input::get('grupaime');
            $prezimena = Input::get('grupaprezime');
            $datumi = Input::get('gruparodjen');
            $brojevi_pasosa = Input::get('grupapasos');

            // preslaganje podataka
            $zajedno = [];
            for($i=0; $i<count($imena); $i++) {
                $zajedno[$i]['ime'] = $imena[$i];
                $zajedno[$i]['prezime'] = $prezimena[$i];
                $zajedno[$i]['rodjen'] = $datumi[$i];
                $zajedno[$i]['pasos'] = $brojevi_pasosa[$i];
            }

            // insert
            foreach($zajedno as $osoba) {
                $osoba['polise_id'] = $lastId;
                $db->insert('grupe', $osoba);
            }
            
        } // Input::get('grupa')

        // redirect
        Session::flash('poruka', 'Polisa je uspešno dodata!');
        Redirect::to('pregled.php');
    } else {
        Session::flash('poruka', 'Nešto je pošlo po zlu...');
        Redirect::to('index.php');
    }

   



}



?>