<?php
    require 'vendor/autoload.php';
    use Dompdf\Dompdf;

    $test = $_POST["test"]; 

            // le contenu de cv. php est inséré dans la variable html
    $pdf = new Dompdf() ; // création du pdf
    $pdf -> loadHtml() ($test ); // chargement du contenu dans Dompdf
    $pdf -> setPaper('A4 ') ; // configuration du format
    $pdf -> render() ; // rendu du pdf
    $pdf -> stream() ; // envoi au navigateur
?>