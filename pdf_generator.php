<?php
require('./libs/tcpdf/tcpdf.php');

function generatePDFUserGuide(){

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    $pdf->SetFont('helvetica', '', 10);

    addPage($pdf, "./pages/quick_start.html");
//    addPage($pdf, "./pages/introduction.html");
//    addPage($pdf, "./pages/main_tool.html");
    addPage($pdf, "./pages/auxiliary_tool.html");
    addPage($pdf, "./pages/palette/rhythm.html");
    addPage($pdf, "./pages/palette/pitch.html");
    addPage($pdf, "./pages/palette/tone.html");
    addPage($pdf, "./pages/palette/interval.html");
    addPage($pdf, "./pages/palette/drum.html");
    addPage($pdf, "./pages/palette/widget.html");
    addPage($pdf, "./pages/graphics/mouse.html");
    addPage($pdf, "./pages/graphics/pen.html");
    addPage($pdf, "./pages/program/flow.html");
    addPage($pdf, "./pages/program/action.html");
    addPage($pdf, "./pages/program/box.html");
    addPage($pdf, "./pages/program/number.html");
    addPage($pdf, "./pages/program/boolean.html");
    addPage($pdf, "./pages/program/sensor.html");
    addPage($pdf, "./pages/program/heap.html");
    addPage($pdf, "./pages/extra/media.html");
    addPage($pdf, "./pages/extra/heap.html");

    $pdf->Output('Music Blocks User Guide.pdf', 'I');

}

function addPage( $pdfFile, $filePath ){
    $pdfFile->AddPage();
    $html = file_get_contents($filePath);
    str_replace("<br/>", "", $html);
    $pdfFile->writeHTML($html, true, false, true, false, '');

}

?>