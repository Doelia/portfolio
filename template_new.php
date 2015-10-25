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
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container">
            <a href="home.html"><img class="profile-image img-responsive pull-left" src="assets/images/profile_4.png" alt="Stéphane Wouters" /></a>
            <div class="profile-content pull-left">
                <h1 class="name">Stéphane Wouters</h1>
                <h2 class="desc">Développeur</h2>
                <ul class="social list-inline">
                    <li><a href="https://github.com/doelia" target="_blank"><i class="fa fa-github-alt"></i></a></li>
                    <li class="last-item"><a href="mailto:stephane@doelia.fr"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div><!--//profile-->
            <a class="btn btn-cta-primary pull-right" target="_blank" href="private/CV/CV.pdf"><i class="fa fa-download"></i>Télécharger mon CV</a>
        </div><!--//container-->
    </header><!--//header-->

    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <?php //require($page); ?>
            </div>
             <div class="secondary col-md-4 col-sm-12 col-xs-12">
                <?php require('inc/secondary.php'); ?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container text-center">
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
