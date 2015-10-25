<?php

function writeTab($alias, $name) {
    global $p;
    return '<a href="/'.$alias.'.html" class="'.(($p == $alias)?'active':'').' item">'.$name.'</a>';
}

$p = 'home';

if (isset($_GET['page']) && $_GET['page']) {
	$p = $_GET['page'];
}

$page = 'content/'.$p.'.php';
require('template.php');
