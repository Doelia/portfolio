<?php

function sendMail($name, $email, $message)
{
	$name=sec($name); $email=sec($email); $message=sec($message);
	$content = "Mail de: $name, $email\n\n $message";
	mail("kyxalia@gmail.com", "Blog", $content);
	$reponse = new xajaxResponse();
	$reponse->call("mailOk()");
	return $reponse;
}
$xajax->register(XAJAX_FUNCTION, 'sendMail');

