<?php
    require 'vendor/autoload.php';

    use Dompdf\Dompdf;

    // $test = $_POST['test'];
    // echo $test
   

    $pdf = new Dompdf() ; 
    $pdf -> loadHtml($_POST['test']); 
    $pdf -> setPaper('A4', 'Portrait') ; 
    $pdf -> render() ; 
    $pdf -> stream() ; 

    
    foreach ( $_POST['test'] as $test) {

    }
?>
</body>
