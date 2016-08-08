<?php
namespace Http\Client;
use Exception;
require_once '../Url.class.php';

$url = new Url("http://www.hypers.com");
$url->getHost();
$url->getParams();
$url->getPath();
$url->getScheme();




?>

