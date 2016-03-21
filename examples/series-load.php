<?php

include_once '../credentials.php';
include_once '../vendor/autoload.php';

$client = new \Marvel\Client($public_key, $private_key);

$term = $_POST['search'];
$series = $client->series->search($term);
//$series = $client->series->load(353);
//echo "<pre>";
/*echo "<pre>";
var_dump($series->results);
foreach($series as $k => $serie)
{
    var_dump($serie);
}/*
/*echo "<pre>";
var_dump($series);
echo "</pre>";*/
//echo $series->title . "\n";
//echo $series->startYear . "\n";
//var_dump($series->urls) . "\n";


// This is a nonexistent series, so we get the exception
//$series = $client->series->load(1);
//echo $series->title . "\n";
