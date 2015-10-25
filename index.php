<?php

session_start();

$debug = true;
$debug_content = '';


$logs = fopen('logs.txt', 'a');
fputs($logs, date('d/m G:i:s').' '.$_SERVER["REMOTE_ADDR"]."\n");
fclose($logs);




/* Debug developpment  */
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', './error_log.txt');
$debug?error_reporting(E_ALL):error_reporting(0);

require('inc/config.php');

require('inc/uses/all.php');
require('inc/ajax/all.php');

require('inc/init.php');
require('template.php');

echo $debug_content;

