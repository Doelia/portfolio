<?php

function sec($chain)
{
	$chain = htmlspecialchars($chain);
	$chain = str_replace("'", "&#39;", $chain);
	return $chain;
}

