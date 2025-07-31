<?php
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('
<h1 style="color:white; background-color:black;padding:20px; text-align:center;border-radius:10px;">
    Welcome to My first composer file!
    </h1>
<p style="font-size:20px; color:blue; text-align:center;">
    This is a simple PDF generation example using Dompdf.
</p>');
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream('dompdf_out.pdf', array('Attachment' => false));