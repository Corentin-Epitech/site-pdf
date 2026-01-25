<?php
    require 'vendor/autoload.php';

    use Dompdf\Dompdf;
    use Dompdf\Options;


    
    $options = new Options();
    $options->set('isRemoteEnabled',true);
    $pdf = new Dompdf($options) ;

    $pdf -> loadHtml($_POST['test']);
    $pdf -> setPaper('A4', 'Portrait') ;
    $pdf -> render() ; 
    $pdf -> stream() ; 
?>
