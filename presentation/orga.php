<head>
<?php 
include_once('../templates/header.php');
?>
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../assets/orgaStyle.css">
</head>
    
    <body>
        <!-- Navbar -->
        <div class="container-fluid">
            <?php include '../navbar.php';?>
        </div>

       <!-- Caroussel -->
       <div class="container-fluid text-center ">
            <div id="carousel">
                <div id="carouselExampleIndicators" class="carousel slide  " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>

                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../img/car1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/car2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/car3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/car4.png" alt="fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/car5.png" alt="fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/car6.jpg" alt="sixth slide">
                        </div>
                    </div>
                    
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> 
        </div>

        <!-- timeline -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline9">
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><i class="fas fa-luggage-cart"></i></span></div>
                                <div class="content">
                                    <span class="year">Avant le voyage !</span>
                                    <p class="description">
                                        Il est important de savoir si vous pouvez vous transférer, vous lever, faire quelques pas ou s’il faut une assistance jusqu’au siège de l’appareil.
                                        </br>
                                        </br>
                                        Tous les fauteuils roulants, manuels ou électriques voyagent en soute au même titre qu’une valises si votre voyage nécessite le trajet en avion.
                                        </br>
                                        </br>
                                        Nos destinations sont préalablement choisis pour que vous puissiez accéder a toute les activités proposés.
                                        </br>
                                        </br>
                                        L'ensemble des activités proposés dans les différentes destinations sont concus pour des PMR.
                                        </br>
                                        </br>
                                        <Strong>Pour connaitre le retour d'expérience des voyageurs, n'hésitez pas à consulter les avis des différentes destination et le forum de mobiliT </strong>
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><i class="fa fa-rocket"></i></span></div>
                                <div class="content">
                                    <span class="year">Choisir son voyage !</span>
                                    <p class="description">
                                        Le personnel mobiliT est à votre disposition pour répondre a vos craintes et ainsi vous conseillez afin de surveiller votre maison ou appartement, ou encore pour la garde de vos animaux de compagnie.
                                        </br>
                                        </br>
                                        Nous vous conseillons de profiter un maximum de votre voyage, et pour profiter pleinement de toute les activités, n'hésitez pas à signaler vos différentes pathologies afin d'être aider et informer des diiférentes alternatives proposés.
                                        </br>
                                        </br>
                                        <Strong>Pour toutes demandes, n'hésitez pas à vous rapprochez du personnel de votre centre de voyage des destinations proposés par mobiliT </strong>
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><i class="fa fa-globe"></i></span></div>
                                <div class="content">
                                    <span class="year">Pendant le voyage !</span>
                                    <p class="description">
                                        Même après votre voyage, le personnel de mobiliT reste a votre écoute, en cas d'oublie, ou d'imprevu subi lors de votre voyage.
                                        </br>
                                        </br>
                                        Nous espérons que votre voyage s'est très bien passé et que vous avez été satisfait de nos renseignements, conseils, ainsi que nos destinations, c'est pour cela que moibiliT souhaite avoir des avis.
                                        </br>
                                        </br>
                                        <Strong>Pour aider nos prochains voyageurs, n'hésitez pas à nous donner votre retour sur la destination proposé par mobiliT </strong>
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                                <div class="content">
                                    <span class="year">Après le voyage !</span>
                                    <p class="description">
                                        Même après votre voyage, le personnel de mobiliT reste a votre écoute, en cas d'oublie, ou d'imprevu subi lors de votre voyage.
                                        </br>
                                        </br>
                                        Nous espérons que votre voyage s'est très bien passé et que vous avez été satisfait de nos renseignements, conseils, ainsi que nos destinations, c'est pour cela que moibiliT souhaite avoir des avis.
                                        </br>
                                        </br>
                                        <Strong>Pour aider nos prochains voyageurs, n'hésitez pas à nous donner votre retour sur la destination proposé par mobiliT </strong>
                                    </p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

<!-- footer include -->
        
        <footer>
            <?php include_once '../templates/footer.php'; ?>
        </footer>

        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
            crossorigin="anonymous">
        </script>
        <script
            src         ="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin ="anonymous">
        </script>
        <script 
            type="text/javascript" 
            src="script.js">
        </script>
    </body>
</html>
