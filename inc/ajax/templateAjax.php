<?php

function loadPage($pageNeed='index')
{
	$reponse = new xajaxResponse();

	$pageNeed = sec($pageNeed);

	include('inc/other/pages.php');

	if (!array_key_exists($pageNeed, $pages_nums)) $pageNeed = '404';

	$num = $pages_nums[$pageNeed];

	$filePhp = $pageNeed.'.php';

	ob_start();
	include "content/".$filePhp;
	$content = ob_get_contents();

	ob_end_clean();


	$reponse->assign('dy_content', 'innerHTML', $content);
	$reponse->call("ecrireProg('titre', '".$pages_titres[$num]."')");
	$reponse->call("ecrireProg('sousTitre', '".$pages_sousTitres[$num]."')");
	$reponse->call("afficherDiv('dy_content', 200)");
	$reponse->call("stop_load()");


	return $reponse;
}
$xajax->register(XAJAX_FUNCTION, 'loadPage');

