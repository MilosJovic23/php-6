<?php


    // ime ne sme biti manje od 3 karaktera



    $Korisnici = ["toma","petar","marko"];

    $proveraImena = isset($_POST["ime"]);
    $prosledjenoIme = strtolower($_POST["ime"]);
    $duzinaImena = strlen($prosledjenoIme);


    if( !$proveraImena ){
        die("niste prosledili ime");
    }

    if( $duzinaImena < 3  ){
        die("ime mora imate najmanje 3 karaktera");
    }

    if( in_array($prosledjenoIme,$Korisnici)){
        echo "pronasli smo korisnika sa tim imenom";
    } else {
        echo "Nismo pronasli korisnika sa tim imenom";
    }



?>