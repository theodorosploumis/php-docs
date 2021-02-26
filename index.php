<?php

include_once(__DIR__ . '/partials/functions.php');

$files = getDirContents( __DIR__ .'/data');
$body = $main = $prefix = $suffix = $buttons = "";
$date = date('Y-m-d_H-i-s');

// Single Page
if (isset($_GET['page'])) {

    $page = $_GET['page'];
    $data_array = getDataArray($files)[$page];
    $page_title = "Page: " . $data_array['title'];

    $prefix = "<html>";
    $prefix .= getHeadPartial($page_title);

    $main = "<div class='page single-page'>";
    $main .= generateTableHtml($data_array);
    $main .= "</div>";

//    $buttons = actionButton('dompdf', "Download PDF");

    $suffix = "</html>";
}
// All Pages
else {
    $data_array = getDataArray($files);

    $prefix = "<html>";
    $prefix .= getHeadPartial();

    $main = "<div class='page'>";
    $main .= getCoverPartial();
    $main .= generateTableOfContents($data_array);
    $main .= generateBody($data_array);
    $main .= "</div>";

//    $buttons = actionButton('pdf', "Download PDF");

    $suffix = "<div class='sticky-gotop hide-on-print'><a href='#toc'>TOC</a></div>";
    $suffix .= "</html>";
}

$final = $prefix . $main . $buttons . $suffix;

// Replace relative paths with real paths (server side) for dompdf
//$head = '<link rel="stylesheet" href="' . realpath(__DIR__ . "/css/style.css") . '" />';
//$pdf_html = DomAbsolutePaths($head . $main);
//exportPage($pdf_html, "export-". $date . ".pdf");

print $final;