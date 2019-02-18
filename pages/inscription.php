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

    <title>Hello, world!</title>
  </head>
    <body>
    <nav class="navbar navbar-light secondary-color">
        <a class="navbar-brand font-weight-bold text-white display-4" href="index.php">
            <img src="../images/couple.svg" height="60" alt="mdb logo"> My Meetic
        </a>
        <form class="inline">
            <button class=" -roundedbtnbtn btn-rounded btn-outline-white btn-lg m-3">Connexion <i class="far fa-user-circle"></i></button>
            <a href="inscription.php"><button class=" -roundedbtnbtn btn-rounded btn-outline-white btn-lg m-3">Inscription <i class="fab fa-wpforms"></i></button></a>
        </form>
    </nav>

  <div class="container inscription_cont">

        <div class="row">
            <div class="inscription_bg col-md-7">
            
            </div>
            
            
            <form class="form-horizontal" role="form">
                <div class="d-flex justify-content-start display-4">Créer vôtre profil</div>
                <div class="form-group">
                    <label for="nom" class="col-sm-3 control-label">Nom</label>
                    <div class="col-sm-9">
                        <input type="text" id="nom" placeholder="Nom" class="form-control" autofocus>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-sm-3 control-label">Prénom</label>
                    <div class="col-sm-9">
                        <input type="text" id="renom" placeholder="Prénom" class="form-control" autofocus>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date de naissance</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Genre</label>
                    <div class="col-sm-9">
                        <select id="ville" class="form-control">
                            <option>Homme</option>
                            <option>Femme</option>
                            <option>Autre</option>
                            
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="ville" class="col-sm-3 control-label">Ville</label>
                    <div class="col-sm-9">
                        <select id="ville" class="form-control">
                            <option>Nancy</option>
                            <option>Paris</option>
                            <option>Metz</option>
                            <option>Bordeaux</option>
                            <option>Montpellier</option>
                            <option>Lyon</option>
                            <option>Marseille</option>
                            <option>Lille</option>
                            <option>AUTRE</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Mot de passe</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirmation</label>
                    <div class="col-sm-9">
                        <input type="password" id="passwordConfirm" placeholder="Confirmez le mot de passe" class="form-control">
                    </div>
                </div>
                
                
                
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-secondary btn-lg btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
            </div>
            
        </div> <!-- ./container -->
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