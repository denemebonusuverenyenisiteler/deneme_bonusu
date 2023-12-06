<?php

# Deneme Bonusu Veren Siteler

$html = file_get_contents('https://newsspotify.com/');

$dom = new DOMDocument;

libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_use_internal_errors(false);

$tables = $dom->getElementsByTagName('table');

foreach ($tables as $table) {
    // deneme bonusu veren sitelerin güncel tablosu
    echo $dom->saveHTML($table);
}
