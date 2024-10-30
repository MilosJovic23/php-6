

<?php




//    $imeProsledjeno = empty($_POST['ime']);
//
//    if ( $imeProsledjeno ) {
//        die("ime nije prosledjeno");
//    }
//
//    $lozinkaProsledjena = empty($_POST['lozinka']);
//
//    if ( $lozinkaProsledjena ) {
//        die("lozinka nije prosledjena");
//    }
//
//    echo $_POST['ime']." ".$_POST['lozinka'];


//    $proveriPin = isset($_POST['pin']);
//
//    if ( !$proveriPin ) {
//        die("niste uneli pin");
//    }

    $proveraPina = isset($_POST['pin']);

        if ( !$proveraPina ) {
            die("pin nije unet");
        }


    $duzinaPina = strlen($_POST["pin"]);


    if( $duzinaPina < 4  || $duzinaPina > 6 ) {
        die("pin mora biti najmamnje 4 karaktera ili manje od 6");
    }
//    echo "uspesno ste uneli pin";

?>