var doc = document;
var isIE=!!document.all;
var effects = isIE?false:true;
effects = true;

function img_load() {
	return '<img src="img/design/spin.gif" alt="X"/>'; }

function href(link) {
	doc.location.href=link; }

function $(id) {
	return document.getElementById(id); }

function masquerDiv(id, retard) {
	if (!retard) retard = 0;
	if (effects) {
		for (i=10; i != -1; i--) {
			newOpacite = i / 10;
			if (isIE) {
				newOpacite *= 100;
				commande = "document.getElementById('"+id+"').style.filter = \"alpha(opacity=" + newOpacite + ")\"";
			}
			else
				commande= "document.getElementById('"+id+"').style.opacity = "+newOpacite+";"
			setTimeout(commande, 10*(10 - i) + retard);
		}
		commande = "document.getElementById('"+id+"').style.display = 'none';"
		setTimeout(commande, 100 + retard);
	}
	else {
		document.getElementById(id).style.opacity = 1;
		commande = "document.getElementById('"+id+"').style.display = 'none';"
		setTimeout(commande, retard); }
}

function afficherDiv(id, retard) {
	if (!retard) retard = 0;
	if (effects) {
		commande1 = "document.getElementById('"+id+"').style.display = ''; document.getElementById('"+id+"').style.opacity = 0;";
		setTimeout(commande1, retard);
		for (i=0; i != 11; i++) {
			newOpacite = i / 10;
			if (isIE) {
				newOpacite *= 100;
				commandeafficherDiv = "document.getElementById('"+id+"').style.filter = \"alpha(opacity=" + newOpacite + ")\""; }
			else
				commandeafficherDiv = "document.getElementById('"+id+"').style.opacity = "+newOpacite+";";
			setTimeout(commandeafficherDiv, 25*i + retard);
		}
	}
	else {
		commande1 = "document.getElementById('"+id+"').style.display = '';";
		setTimeout(commande1, retard);
		document.getElementById(id).style.opacity = 1; }
}

function afficherMasquer(id) {
	if (document.getElementById(id).style.display == '') masquerDiv(id, true);
	else afficherDiv(id, true); }

function remplacer_div(div1, div2) {
	masquerDiv(div1);
	afficherDiv(div2, true, 100); }

function recup_cookie(nom) {
	if (document.cookie.length > 0) {
		var texte = nom+"=";
		var table = document.cookie.split(/;/);
		var valeur="1";
		for (i=0; i<table.length; i++) {
			if(table[i].indexOf(texte) != -1)
				valeur = table[i].substring(Number(texte.length + table[i].indexOf(texte)), table[i].length);
		}
	}
	return valeur; }

	function decodeQuote(chain) {
	chain = chain.replace("`", '&#39;');
	chain = chain.replace("`", '&#39;');
	chain = chain.replace("`", '&#39;');
	chain = chain.replace("`", '&#39;');
	return chain; }

function remplace_quote(chain) {
	chain = chain.replace("'", '&#39;');
	chain = chain.replace("'", '&#39;');
	chain = chain.replace("'", '&#39;');
	chain = chain.replace("'", '&#39;');
	return chain; }


var txtEnCours = new Array();
function ecrireTextProgressif(id, text) {
	txtEnCours[id] = Math.random();
	text = decodeQuote(text);
	newText = '';
	if (effects) {
		for (i=0; i < text.length; i++) {
			newText += text.charAt(i);
			commande = "if(txtEnCours['"+id+"'] == '"+txtEnCours[id]+"') $('"+id+"').innerHTML = '"+newText+"';";
			//alert(commande);
			setTimeout(commande, 30*i); }
	}
	else document.getElementById(id).innerHTML = text;
}

