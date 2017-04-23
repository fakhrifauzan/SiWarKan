<?php

class PdfGenerator
{
  public function generate($html,$filename)
  {
    define('DOMPDF_ENABLE_AUTOLOAD', false);
    include ("dompdf/autoload.inc.php");

    $kode = date("ymdHis");

    $dompdf = new Dompdf\Dompdf();
    $dompdf->load_html($html);
    $dompdf->setPaper('A4', 'potrait');
    //$dompdf->set_option('defaultFont', 'Courier');
    $dompdf->render();
    $dompdf->stream($filename.'_'.$kode.'.pdf',array("Attachment"=>0));
  }
}
