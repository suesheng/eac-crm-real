<?php
ini_set('display_errors', 1);
ini_set("include_path", dirname(__FILE__)."/src/" . PATH_SEPARATOR . ini_get("include_path"));
require_once "src/Diggin/Phantomjs.php";

$phantomjs = new Diggin\Phantomjs('/var/phantomjs/phantomjs/bin');
$html = $phantomjs->getHtml('http://207.154.206.151/eac-crm/resources/pdfs/template-526.htm');

var_dump($html);
var_dump($phantomjs->getLastMessages());

