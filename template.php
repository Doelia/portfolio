<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Stéphane Wouters - Portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Stéphane Wouters Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" class="ui" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" class="ui" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/css/lightbox.min.css">

    <link rel="icon" href="assets/images/logo.png" type="image/png"/>

</head>
<body>
    <header class="ui inverted vertical masthead center aligned segment">
        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a href="/" class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <?= writeTab('home', 'Accueil') ?>
                <?= writeTab('projects', 'Projets persos') ?>
                <?= writeTab('carrer', 'Parcours pro') ?>
                <?= writeTab('skills', 'Compétences') ?>
                <div class="right item">
                </div>
            </div>
        </div>
    </header>

    <div class="ui container">
        <div class="ui container grid">
            <div class="ten wide column primary">
                <?php require($page); ?>
            </div>
            <div class="six wide column secondary">
                <?php require('inc/secondary.php'); ?>
            </div>
        </div>
    </div>

    <footer class="ui inverted vertical footer segment">
        <div class="ui center aligned container">
            Copyright 2015 | <a href="http://doelia.fr">Stéphane Wouters</a>
        </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/js/lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
