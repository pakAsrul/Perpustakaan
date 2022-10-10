<?php
    require('../../src/tcppdf/tcpdf.php');
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->setFont('times', '', 11, '', true);
    $pdf->AddPage();
    $html = file_get_contents("http://localhost/perpus/src/transaksi/cetak-transaksi.php");
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
    $pdf->Output('cetak transaksi.pdf', 'I');
?>