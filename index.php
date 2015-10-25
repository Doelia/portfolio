<?php

function writeTab($alias, $name) {
    global $p;
    return '<a href="/'.$alias.'.html" class="'.(($p == $alias)?'active':'').' item">'.$name.'</a>';
}

$p = 'home';

if (isset($_GET['page']) && $_GET['page']) {
    $ptmp = $_GET['page'];
    if (!file_exists('content/'.$ptmp.'.php')) {
    	$ptmp = '404';
    }
    $p = $ptmp;
}

$page = 'content/'.$p.'.php';
require('template.php');
