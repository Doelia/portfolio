function sendMail()
{
	var name = $('name').value;
	var email = $('email').value;
	var message = $('message').value;

	if (!name || !email || !message)
		alert('Veuillez remplir tout les champs');
	else
	{
		start_load();
		xajax_sendMail(name, email, message);
	}

	return false;

}

function mailOk()
{
	masquerDiv('form');
	setTimeout("$('form').innerHTML = 'Message envoyé avec succés';", 200);
	afficherDiv('form', 200);
	stop_load();

}

