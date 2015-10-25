<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Stéphane Wouters - Portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Stéphane Wouters Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" class="ui" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" class="ui" href="assets/css/styles.css">

    <link rel="icon" href="assets/images/logo.png" type="image/png"/>

</head>
<body>
    <header class="header">
        <div class="ui container">
            <a href="home.html"><img class="profile-image img-responsive pull-left" src="assets/images/profile_4.png" alt="Stéphane Wouters" /></a>
            <div class="profile-content pull-left">
                <h1 class="">Stéphane Wouters</h1>
                <h2 class="">Développeur</h2>
                <ul class="">
                    <li class=""><a href="https://github.com/doelia" target="_blank"><i class="fa fa-github-alt"></i></a></li>
                    <li class=""><a href="mailto:stephane@doelia.fr"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <a class="ui primary button right" target="_blank" href="private/CV/CV.pdf"><i class="fa fa-download"></i>Télécharger mon CV</a>
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

    <footer class="ui footer">
        <div class="ui centered inverted">
            <small class="copyright">Copyright 2015 | <a href="http://doelia.fr">Stéphane Wouters</a></small>
        </div>
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/js/lightbox.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>


</body>
</html>
