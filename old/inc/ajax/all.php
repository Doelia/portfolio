<?php

require('library/xajax_core/xajax.inc.php');
$xajax = new xajax();
//$xajax->setCharEncoding('iso-8859-15');

require('templateAjax.php');
require('contact.php');

$xajax->processRequest();
