<?php

$p = 'home';

if (isset($_GET['page']) && $_GET['page']) {
	$p = $_GET['page'];
}

$page = 'content/'.$p.'.php';
require('template.php');
