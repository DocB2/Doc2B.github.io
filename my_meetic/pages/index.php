<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">


    <link rel="shortcut icon" href="../images/couple.ico" />

    <title>My Meetic</title>
</head>

<body>
    
    <!-- Just an image -->
    <nav class="navbar navbar-light secondary-color">
        <a class="navbar-brand font-weight-bold text-white display-4" href="index.php">
            <img src="../images/couple.svg" height="60" alt="mdb logo"> My Meetic
        </a>
        <form class="inline">
            <a href="#" class=" -roundedbtnbtn btn-rounded btn-outline-white btn-lg m-3" role="button">Connexion <i class="fa fa-chevron-circle-right  "fa fa-chevron-circle-right "></i></a>
            <a href="../pages/inscription.php" class=" -roundedbtnbtn btn-rounded btn-outline-white btn-lg m-3" role="button">Inscription <i class="fa fa-plus-circle "></i></a>
        </form>
    </nav>
    <div class="jumbotron">
        <div class="row justify-content-center m-5 p-2">
            <h1 class="font-weight-bold text-white display-2">Bienvenue sur My Meetic !</h1>
        </div>
        <div class="container index">


            <div class="row  d-flex jumbo p-5">

                <div class="col-md-5 border-right border-white">

                    <form action="" method="post" name="login" class="d-flex flex-column justify-content-between">
                        <div class="form-group">
                            <h2 class="font-weight-bold text-white"><label for="exampleInputEmail1">EMAIL</label></h2>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <h2 class="font-weight-bold text-white"><label for="exampleInputEmail1">MOT DE PASSE</label>
                            </h2>
                            <input type="password" name="password" id="password" class="form-control"
                                aria-describedby="emailHelp" placeholder="Enter Password">

                        </div>
                        <p class="text-white"><a a href="profil.php" class="btn btn-secondary btn-lg" role="button">SE CONNECTER</a></p>
                    </form>
                </div>

                <div class="col-md-5 offset-md-1 border-left border-white d-flex flex-column justify-content-between">
                    <h2 class="font-weight-bold text-white">PAS ENCORE INSCRIT ?!</h2>
                    <h3 class="text-white">Cliquez sur le boutton ci-dessous et rejoignez My Meetic :)</h3>
                    <p class="text-white"><a href="inscription.php" class="btn btn-secondary btn-lg" role="button">S'INSCRIRE</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small  secondary-color lighten-3 ">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mb-4">My Meetic</h5>
                    <p>Ce projet a été réalisé par Julien Bonnet pour la Web@cadémie!</p>


                </div>
                <!-- Grid column -->




                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Contact details -->
                    <h5 class="font-weight-bold text-uppercase mb-4">CONTACT</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fas fa-home mr-3"></i> 80 Rue Saint-Georges, 54000 Nancy</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-envelope mr-3"></i> julien.bonnet@epitech.eu</p>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                    <!-- Social buttons -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Suivez-nous</h5>

                    <!-- Facebook -->
                    <a href="https://facebook.com" type="button" class="btn-floating btn-fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com" type="button" class="btn-floating btn-tw">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <!-- Google +-->
                    <a href="https://google.com" type="button" class="btn-floating btn-gplus">
                        <i class="fab fa-google-plus-g"></i>
                    </a>


                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="">Julien Bonnet W@C</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</body>

</html>