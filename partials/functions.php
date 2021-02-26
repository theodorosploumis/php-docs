<?php

require __DIR__ . '/../vendor/autoload.php';
include_once(__DIR__ . '/../settings.php');
GLOBAL $settings;

use Dompdf\Dompdf;
use League\CommonMark\GithubFlavoredMarkdownConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/**
 * @param string $text
 * @return string
 */
function markdownToHtml($text) {
    $converter = new GithubFlavoredMarkdownConverter();
    return $converter->convertToHtml($text);
}

/**
 * @param string $filepath
 * @return array|void
 */
function getFileContent($filepath = "") {
    if (is_array(getimagesize($filepath))){
        return;
    }
    $output = [];
    $parser = YamlFrontMatter::parse(file_get_contents($filepath));
    $output['matter'] = $parser->matter();
    $output['matter']['body'] = markdownToHtml($parser->body());
    $output['matter']['path'] = $filepath;

    return $output;
}

/**
 * @param string $dir
 * @param array $results
 * @return array
 */
function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);

        if (!is_dir($path)) {
            $results[] = $path;

        } else if ($value !== "." && $value !== "..") {
                getDirContents($path, $results);
                $results[] = $path;
        }
    }

    return $results;
}


/**
 * @param array $files
 * @return array
 */
function getDataArray($files = []) {
    $output = [];

    foreach ($files as $file) {
        $content = getFileContent($file)['matter'];

        foreach ($content as $key => $value) {
            $slug = $content['slug'];
            $output[$slug][$key] = $value;
        }
    }

    return $output;
}

/**
 * @param $data_array
 * @return string
 */
function generateBody($data_array){
    aasort($data_array, "weight");
    $output = "";

    foreach ($data_array as $page => $values) {
        $output .= generateTableHtml($values);
    }

    return $output;
}

/**
 * Generate PDF file from html with DomPDF
 *
 * @param string $pdf_title
 * @param string $pdf_author
 * @param string $html
 * @param string $filepath
 */
function GeneratePdfFromHtmlDompdf($pdf_title, $pdf_author, $html, $filepath) {
    $chroot = dirname(__DIR__) . "/";

    $dompdf = new Dompdf();
    $dompdf->getOptions()->set([
        'defaultFont' => 'helvetica',
        'isRemoteEnabled' => true,
        'isHtml5ParserEnabled', true,
        'chroot' => $chroot,
    ]);

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A3', 'landscape');
    $dompdf->render();
    // Add metadata after rendering
    $dompdf->add_info('Title', $pdf_title);
    $dompdf->add_info('Author', $pdf_author);
    $dompdf->add_info('Subject', $pdf_title . ' - ' . $pdf_author);

    // Save to file instead of downloading/opening the file
//    $output = $dompdf->output();
//    file_put_contents($filepath, $output);
//    unset($dompdf);

    // Open pdf in browser
    $dompdf->stream($filepath);
    unset($dompdf);
}

/**
 * @param string $type
 * @param string $button_title
 *
 * @return string
 */
function actionButton($type, $button_title = "Download") {
    $form = '<form id="export-pdf" method="GET" action="index.php?type='.$type.'" class="hide-on-print export-button">';
    $form .= '<input type="hidden" name="type"  value="'.$type.'">';
    $form .= '<input type="submit" name="button" value="'.$button_title.'">';
    $form .= '</form>';

    return $form;
}

function exportPage($body, $filename) {
    GLOBAL $settings;

    // Download pdf
    if (isset($_GET['type']) && $_GET['type'] === "pdf") {
        $file = $filename . ".pdf";
        $title = $settings['title'];
        $author = $settings['author'];

        GeneratePdfFromHtmlDompdf($title, $author, $body, $file);
    }
}

/**
 * @param string $html
 *
 * @return string
 */
function DomAbsolutePaths($html) {
    $root = dirname(__DIR__);
    $html = html_entity_decode($html,ENT_QUOTES,'UTF-8');

    $doc = new DOMDocument();
    $doc->loadHTML($html);

    // img
    $img_tags = $doc->getElementsByTagName('img');
    foreach ($img_tags as $tag) {
        $old_src = $tag->getAttribute('src');
        $new_src_url = $root . $old_src;
        $tag->setAttribute('src', $new_src_url);
    }

    return $doc->saveHTML();
}

/**
 * @param $array
 * @param $key
 */
function aasort(&$array, $key) {
    $sorter=array();
    $ret=array();
    reset($array);

    foreach ($array as $ii => $va) {
        $sorter[$ii]=$va[$key];
    }

    natsort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii]=$array[$ii];
    }

    $array = $ret;
}

/**
 * @param $array
 * @return string
 */
function generateTableOfContents($array) {
    aasort($array, "weight");
    $list = "";

    foreach ($array as $page => $values) {
        if (isset($values['slug'])) {
            $list .= "<li><a href='#slug-".$values['slug']."'>".$values['weight']." ".$values['title']."</a></li>";
        }
    }

    $toc = "<div class='h1 break-page-always' id='toc'>Table of Contents</div>";
    $toc .= "<ul class='list-toc'>" . $list . "</ul>";

    return $toc;
}

/**
 * @param array $array
 * @return string
 */
function generateTableHtml($array) {
    GLOBAL $settings;

    $section_class = "";

    // Get data (md file) relative to web root filepath
    $path = $array['path'];
    $dir = str_replace('partials', '', __DIR__);
    $path = str_replace($dir, "", $path);

    if (isset($array['section'])) {
        $section_class = "section-title";
    }

    if (isset($array['slug'])) {
        $slug = $array['slug'];

        $table = "<div class='page-wrapper ".$section_class."' id='slug-".$slug."'>";
        $table .= "<div class='title-wrapper break-page-always'>";
        $table .= "<a class='anchor helper-meta' title='Link here' aria-hidden='true' href='#slug-".$slug."'>#</a>";
        $table .= "<h1 class='helper-meta'>". $array['weight'] . " " .$array['title']."</h1>";
        $table .= "<a class='edit-data hide-on-print helper-meta' target='_blank' title='Edit source' href='/".$path."'>Edit Source</a>";
        $table .= "<a class='open-single-page hide-on-print helper-meta' target='_blank' title='Open single page' href='/?page=".$slug."'>Single Page</a>";
        $table .= "</div>";
    } else {
        return "";
    }

    // Start Basic Table
    $table .= "<table class='table-basic'>";
    if (isset($array['url'])) {
        $table .= "<tr class='row-basic row-url'><td class='bold'>Url</td><td><a href='" . $settings['base_url'] . $array['url'] . "'>" . $array['url'] . "</a></td></tr>";
    }
    if (isset($array['menu'])) {
        $table .= "<tr class='row-basic row-menu'><td class='bold'>Menu</td><td>" . $array['menu'] . "</td></tr>";
    }
    if (isset($array['prerequisite'])) {
        $table .= "<tr class='row-basic row-prerequisite'><td class='bold'>Prerequisite</td><td>" . generateUnsortedList($array['prerequisite']) . "</td></tr>";
    }
    if (isset($array['taxonomy'])) {
        $table .= "<tr class='row-basic row-taxonomy'><td class='bold'>Taxonomy</td><td>" . generateUnsortedList($array['taxonomy']) . "</td></tr>";
    }
    if (isset($array['tips'])) {
        $table .= "<tr class='row-basic row-tips'><td class='bold'>Tips</td><td>" . generateUnsortedList($array['tips']) . "</td></tr>";
    }
    if (isset($array['body']) && $array['body'] !== "") {
        $table .= "<tr  class='row-basic row-wide row-description'><td class='bold'>Info</td><td><div class='description'>".$array['body']."</div></td></tr>";
    }
    $table .= "</table>";

    // Start Screenshots Table
    if (isset($array['screenshot_steps'])) {
        $table .= generateStepsTable($array['screenshot_steps']);
    }

    $table .= "</div>";

    return $table;
}

/**
 * @param $array
 * @return string
 */
function generateNumberList($array) {
    $output = "";
    foreach ($array as $key => $value) {
        $output .= "<li class='list-item-inline'>" . markdownToHtml($value) . "</li>";
    }
    return "<ol>" . $output . "</ol>";
}

/**
 * @param $array
 * @return string
 */
function generateUnsortedList($array) {
    $output = "";
    foreach ($array as $key => $value) {
        $output .= "<li class='list-item-inline'>" . markdownToHtml($value) . "</li>";
    }
    return "<ul class='unsorted-list'>" . $output . "</ul>";
}

/**
 * @param $array
 * @return string
 */
function generateStepsTable($array) {
    $output = "";
    $header = "";

    // Multiple Step groups
    if (isset($array[0])) {
        foreach ($array as $current) {
            $output .= generateStepsTable($current);
        }
      return $output;
    }

    if (!empty($array['header'])) {
        $header = "<td class='header' colspan='2'>Image: ". $array['header']."</td>";
    }

    if (!empty($array['image'])) {
        $output .= "<td class='image'><img src='".$array['image']."' alt='Screenshot'></td>";
    }

    if (!empty($array['steps'])) {
        $output .= "<td class='steps'>".generateNumberList($array['steps'])."</td>";
    }

    $table = "<table class='table-steps break-page-avoid'>";
    $table .= "<tr class='steps-header'>".$header."</tr>";
    $table .= "<tr class='steps-screenshot'>" . $output . "</tr>";
    $table .= "</table>";
    $table .= "<div class='separator'></div>";

    return $table;
}

/**
 * @param string $page_title
 * @return string
 */
function getHeadPartial($page_title = "") {

    if ($page_title === "") {
        GLOBAL $settings;
        $page_title = $settings['title'];
    }

    return '<head>
    <meta charset="utf-8" />
    <meta name="Generator" content="PHP Documentation Generator" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/css/assets/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" media="all" href="/css/style.css" />
    <title>' . $page_title . '</title></head>';
}

/**
 * @return false|string
 */
function getCoverPartial() {
    global $settings;

    $output = '<div class="cover break-page"><h1 class="cover-title">' . $settings['title'] . '</h1>';
    $output .= '<div class="cover-logo"><img src="'. $settings['logo'] . '" alt="Logo"></div>';
    $output .= '<table class="cover-table">';
    $output .= '<tr><td class="bold">Website:</td><td><a href="'.$settings['base_url'].'">'.$settings['base_url'].'</a></td></tr>';
    $output .= '<tr><td class="bold">Project:</td><td>'.$settings['project_name'] .'</td></tr>';
    $output .= '<tr><td class="bold">Date:</td><td>'.$settings['created'] . '</td></tr>';
    $output .= '<tr><td class="bold">Owner:</td><td>'.$settings['owner'].'</td></tr>';
    $output .= '<tr><td class="bold">Author: </td><td>'.$settings['author'].'</td></tr>';
    $output .= '</table></div>';

    return $output;
}

/**
 * @param string $html
 * @param string $css
 *
 * @return string
 */
function cssToInlineStyles($html, $css) {
    $cssToInlineStyles = new CssToInlineStyles();
    return $cssToInlineStyles->convert($html, $css);
}