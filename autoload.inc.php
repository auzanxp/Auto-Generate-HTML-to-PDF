<?php require (__DIR__ . '/vendor/autoload.php');
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$file = file_get_contents('./index1.html', true);
$dompdf->loadHtml($file);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
// $dompdf->stream();

$dompdf->stream($filename,  array("Attachment" => 0));

