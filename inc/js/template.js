var pageLoad = 'index';
var load = false;

var onglets = new Array("index", "bio", "competences", "realisations", "contact");

function cpage(page) {
	if (!load) {
		start_load();
		var idOnglet = '';
		for (i=0; i < 5; i++) {
			idOnglet = "ongl_"+onglets[i];
			if ($(idOnglet) && onglets[i] == page)
				$(idOnglet).className = 'current';
			else
				$(idOnglet).className = '';
		}
		pageLoad = page;
		href('#!/'+page);
		xajax_loadPage(page);
		masquerDiv('dy_content');
	}
}

function ecrireProg(element, text) {
	element = "dy_"+element;
	ecrireTextProgressif(element, text);
}

function start_load() {
	afficherDiv('dy_load');
	load = true;
}

function stop_load() {
	setTimeout("load = false; masquerDiv('dy_load');", "100");
}

