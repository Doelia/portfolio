<!DOCTYPE html>
<!--[if IE 8]> <html lang="fr" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="fr" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->  
<head>
    <title>Stéphane Wouters - Portfolio</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stéphane Wouters Portfolio">
    <meta name="author" content="3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.css">
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    
</head> 
<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">                       
            <a href="home.html"><img class="profile-image img-responsive pull-left" src="assets/images/profile.png" alt="Stéphane Wouters" /></a>
            <div class="profile-content pull-left">
                <h1 class="name">Stéphane Wouters</h1>
                <h2 class="desc">Développeur & Entrepreneur</h2>   
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
                <?php require($page); ?>
            </div>
             <div class="secondary col-md-4 col-sm-12 col-xs-12">
                <?php require('inc/secondary.php'); ?>
            </div>
        </div>
    </div>

    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <small class="copyright">Copyright 2015 | <a href="http://doelia.fr">Stéphane Wouters</a></small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/lightbox/js/lightbox.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/fancybox/jquery.fancybox.pack.js"></script> 
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>    

            
</body>
</html>
