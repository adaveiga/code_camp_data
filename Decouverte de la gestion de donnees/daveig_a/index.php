<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>What's In My Food?</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">What's In My Food?</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse topbuttons" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Projet</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Catégories</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Calculateur</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Equipe</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenue !</div>
                <div class="intro-heading">Know what you eat</div>
                <a href="#services" class="page-scroll btn btn-xl">En savoir plus</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Notre projet</h2>
                    <h3 class="section-subheading text-muted">Lors de la réalisation de ce projet, nous avions différents objectifs</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Mangez malin !</h4>
                    <p class="text-muted">En répertoriant les apports nutrionnels de certains aliments, notre objectif était d'aider le public le plus large a se renseigner sur ce qu'il mange vraiment.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Nous voulons vous offrir une expérience ergonomique et ludique, que ce soit sur votre ordinateur ou votre smartphone.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Navigation sécurisée</h4>
                    <p class="text-muted">Nous n'effectuons aucune transaction commerciale pour aucun produit que nous presentons, aucune inscription payante n'est nécessaire pour l'usage de notre site.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Catégories</h2>
                    <h3 class="section-subheading text-muted">Cliquez sur les images pour avoir plus de détails.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/produitslaitiers.jpg" class="img-responsive" alt="" style="height:360px;width:360px">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Produits Laitiers</h4>
                        <p class="text-muted">Fromages, yaourts, etc</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/fruits.jpg" class="img-responsive" alt="" style="height:360px;width:360px">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Fruits et Légumes</h4>
                        <p class="text-muted">Tout ce qui pousse sur la planete !</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/boissons.jpg" class="img-responsive" alt="" style="height:360px;width:360px">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Boissons</h4>
                        <p class="text-muted">Quand l'eau ne suffit pas !</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/viande.jpg" class="img-responsive" alt="" style="height:360px;width:360px">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Viandes et poissons</h4>
                        <p class="text-muted">Volailles, bovins, etc.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/poissons.jpg" class="img-responsive" alt="" style="height:360px;width:360px">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Plats</h4>
                        <p class="text-muted">Tout ce qu'on trouve dans la mer !</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/autres.jpg" class="img-responsive" alt="" style="height:360px;width:360px">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Autres</h4>
                        <p class="text-muted">Le reste !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">L'équipe What's In My Food</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/angelo.jpg" class="img-responsive img-circle" alt="">
                        <h4>Angelo Da Veiga</h4>
                        <p class="text-muted">Développement Front-End</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/public-profile-settings?trk=prof-edit-edit-public_profile" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/ulric.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ulric Kouassi</h4>
                        <p class="text-muted">Développement Front-End</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="http://fr.linkedin.com/pub/ulric-kouassi/a3/652/605/fr" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/antoine.jpg" class="img-responsive img-circle" alt="">
                        <h4>Antoine Gunzburger</h4>
                        <p class="text-muted">Développement Back-End</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="http://fr.linkedin.com/pub/null-null/b0/a64/127/fr" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-17">
                   <div class="team-member">
                        <img src="img/team/aurelien.jpg" class="img-responsive img-circle" alt="">
                        <center><h4>Aurélien Adam</h4></center>
                        <p class="text-muted">Développement Back-End</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="http://fr.linkedin.com/pub/aur%C3%A9lien-adam/80/232/150/fr" target="_blank"><i class="fa fa-linkedin" target="_blank"></i></a>
                            </li>
                        </ul>
                    </div>
                </div></center>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; What's In Your Food ? 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Politique de confidentialité</a>
                        </li>
                        <li><a href="#">Conditions d'utilisation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <?php $json = file_get_contents('liste_json.json');
                            $tab = json_decode($json);
                            for ($i = 0; isset($tab->ORIGGPFR[$i]); $i++):?>
                            <?php if(substr($tab->ORIGGPFR[$i], 0, 8) == "Fromages" || substr($tab->ORIGGPFR[$i], 0, 5) == "Laits" || substr($tab->ORIGFDNM[$i], 0, 4) == "Lait" || substr($tab->ORIGGPFR[$i], 0, 6) == "Yaourt" || substr($tab->ORIGFDNM[$i], 0, 6) == "Yaourt" || substr($tab->ORIGFDNM[$i], 0, 6) == "Beurre" || substr($tab->ORIGFDNM[$i], 0, 6) == "Crème" || substr($tab->ORIGGPFR[$i], 0, 6) == "Crème")
                            echo "<a>".$tab->ORIGFDNM[$i]."</a><br>";?> 
                            <?php endfor;?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                             <?php $json = file_get_contents('liste_json.json');
                            $tab = json_decode($json);
                            for ($i = 0; isset($tab->ORIGGPFR[$i]); $i++):?>
                            <?php if(substr($tab->ORIGGPFR[$i], 0, 6) == "Fruits" || substr($tab->ORIGGPFR[$i], 0, 8) == "Légumes" || substr($tab->ORIGGPFR[$i], 0, 15) == "Pommes de terre")
                            echo "<a>".$tab->ORIGFDNM[$i]."</a><br>";?> 
                            <?php endfor;?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <?php $json = file_get_contents('liste_json.json');
                            $tab = json_decode($json);
                            for ($i = 0; isset($tab->ORIGGPFR[$i]); $i++):?>
                            <?php if($tab->ORIGFDNM[$i] == "Eau du robinet" || substr($tab->ORIGGPFR[$i], 0, 9) == "Cocktails" || substr($tab->ORIGGPFR[$i], 0, 3) == "Jus" || substr($tab->ORIGGPFR[$i], 0, 8) == "Liqueurs" || substr($tab->ORIGGPFR[$i], 0, 4) == "Vins" || substr($tab->ORIGGPFR[$i], -6) == "alcool")
                            echo "<a>".$tab->ORIGFDNM[$i]."</a><br>";?> 
                            <?php endfor;?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <?php $json = file_get_contents('liste_json.json');
                            $tab = json_decode($json);
                            for ($i = 0; isset($tab->ORIGGPFR[$i]); $i++):?>
                            <?php if($tab->ORIGGPFR[$i] == "Abats" || $tab->ORIGGPFR[$i] == "Viandes" || $tab->ORIGGPFR[$i] == "Volailles" || substr($tab->ORIGGPFR[$i], 0, 12) == "Charcuteries" || substr($tab->ORIGGPFR[$i], 0, 8) == "Poissons" || substr($tab->ORIGGPFR[$i], -8) == "poissons")
                            echo "<a>".$tab->ORIGFDNM[$i]."</a><br>";?> 
                            <?php endfor;?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                           <?php $json = file_get_contents('liste_json.json');
                            $tab = json_decode($json);
                            for ($i = 0; isset($tab->ORIGGPFR[$i]); $i++):?>
                            <?php if(substr($tab->ORIGGPFR[$i], 0, 5) == "Plats" || substr($tab->ORIGGPFR[$i], 0, 6) == "Pizzas")
                            echo "<a>".$tab->ORIGFDNM[$i]."</a><br>";?> 
                            <?php endfor;?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                           <?php $json = file_get_contents('liste_json.json');
                            $tab = json_decode($json);
                            for ($i = 0; isset($tab->ORIGGPFR[$i]); $i++):?>
                            <?php if(substr($tab->ORIGGPFR[$i], 0, 5) != "Plats" && substr($tab->ORIGGPFR[$i], 0, 6) != "Pizzas" && $tab->ORIGGPFR[$i] != "Abats" && $tab->ORIGGPFR[$i] != "Viandes" && $tab->ORIGGPFR[$i] != "Volailles" && substr($tab->ORIGGPFR[$i], 0, 12) != "Charcuteries" && substr($tab->ORIGGPFR[$i], 0, 8) != "Poissons" && substr($tab->ORIGGPFR[$i], -8) != "poissons" && $tab->ORIGGPFR[$i] != "Eaux" && substr($tab->ORIGGPFR[$i], 0, 9) != "Cocktails" && substr($tab->ORIGGPFR[$i], 0, 3) != "Jus" && substr($tab->ORIGGPFR[$i], 0, 8) != "Liqueurs" && substr($tab->ORIGGPFR[$i], 0, 4) != "Vins" && substr($tab->ORIGGPFR[$i], -6) != "alcool" && substr($tab->ORIGGPFR[$i], 0, 6) != "Fruits" && substr($tab->ORIGGPFR[$i], 0, 8) != "Légumes" && substr($tab->ORIGGPFR[$i], 0, 15) != "Pommes de terre" && substr($tab->ORIGGPFR[$i], 0, 8) != "Fromages" && substr($tab->ORIGGPFR[$i], 0, 5) != "Laits" && substr($tab->ORIGFDNM[$i], 0, 4) != "Lait" && substr($tab->ORIGGPFR[$i], 0, 6) != "Yaourt" && substr($tab->ORIGFDNM[$i], 0, 6) != "Yaourt" && substr($tab->ORIGFDNM[$i], 0, 6) != "Beurre" && substr($tab->ORIGFDNM[$i], 0, 6) != "Crème" && substr($tab->ORIGGPFR[$i], 0, 6) != "Crème" && substr($tab->ORIGGPFR[$i], -4) != "Inca")
                            echo "<a>".$tab->ORIGFDNM[$i]."</a><br>";?> 
                            <?php endfor;?>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
