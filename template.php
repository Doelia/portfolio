<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="fr" />
<meta name="google-site-verification" content="vGGfuV3ROLa2HJFPriB0uiTln46j9kLod778OJ226pY" />
<title>Doelia</title>
<script type="text/javascript" src="inc/js/utilitaires.js"></script>
<script type="text/javascript" src="inc/js/template.js"></script>
<script type="text/javascript" src="inc/js/contact.js"></script>
<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design/blocks.css" />
</head>

<body>
<?php $xajax->printJavascript('library'); ?>

<div id="wrap">

	<div id="header">
		<h1 id="logo-text"><a onclick="cpage('index');">Doelia</a></h1>
		<p id="slogan">Stéphane Wouters, Développeur Web</p>

		<div id="top-menu">
			<p>
				<a onclick="cpage('bio');">Bio</a> |
				<a onclick="cpage('realisations');">Réalisations</a> |
				<a onclick="cpage('contact');">Contact</a>
			</p>
		</div>
	</div>

	<div  id="nav">
		<ul>
			<li id="ongl_index"><a onclick="cpage('index');">Accueil</a></li>
			<li id="ongl_bio"><a onclick="cpage('bio')">Bio</a></li>
			<li id="ongl_competences"><a onclick="cpage('competences')">Compétences</a></li>
			<li id="ongl_realisations"><a onclick="cpage('realisations')">Réalisations</a></li>
			<li id="ongl_contact"><a onclick="cpage('contact')">Contact</a></li>
		</ul>
	</div>

	<div id="content" style="min-height: 500px;">
		<div id="main">
			<h2><a onclick="cpage(pageLoad)" id="dy_titre">Chargement...</a></h2>
			<p id="dy_sousTitre" class="post-info">Veuillez patienter...</p>

			<div id="dy_content"></div>

			<script>cpage(pageLoad);</script>
		</div>

		<div id="sidebar">
			<h3>A propos</h3>
			<p>
			<a onclick="cpage('index')"><img src="design/gravatar.jpg" width="40" height="40" alt="image" class="float-left img" /></a>
			Stéphane Wouters, sous le pseudo Doelia est un developpeur web agé de 21 ans. Il pratique sa passion depuis 2009.
			</p>

			<h3>Réalisations</h3>
			<ul class="sidemenu">
				<li><a href="http://survivia.net" target="_blank">Survivia Multigaming <br />
				<span>Portail de serveur de jeu massivement multijoueurs.</span></a>
				</li>
				<li><a href="http://doelia.fr/minelia" target="_blank">Minelia <br />
				<span>Mini jeu de plateau développé en 48h.</span></a>
				</li>
				<li><a href="http://desinia.doelia.fr" target="_blank">Desinia <br />
				<span>Tableau blanc coopératif</span></a>
				</li>
				<li><a onclick="cpage('realisations')">Plus... <br />
				<span>Détails de mes projets sur la page dédiée.</span></a>
				</li>
			</ul>
		</div>
	</div>

	<div id="footer">
		<p>
		&copy; 2010-2012 Doelia | <a onclick="cpage('credits')" >A propos de ce blog</a>
		</p>
	</div>

</div>

<div id="dy_load"><img src="design/spin.gif" />&nbsp;&nbsp;&nbsp;Chargement...</div>

</body>
</html>

