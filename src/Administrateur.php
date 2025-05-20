<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Institut Africain d'informatique</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image" href="../assets/image/iai2.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body style="background-image: url(../assets/image/a9.jpg);">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="col-md-9">
            <h1>
                <img src="../assets/image/iai2.png" width="80" alt="IAI-TOGO Logo">
                <a class="navbar-brand" href="#" style="color: #FFFF99; font-family: algerian">
                    IAI-TOGO<br>
                    <p style="color: #FFFF99; font-family: bell mt">La référence en matière d'informatique</p>
                </a>
            </h1>
        </div>
        <div class="col-md-3">
            <ul class="nav justify-content-end">
                <form class="form-inline my-2 my-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color: #FFFF99">
                            <h6>Bienvenue <b><?php echo htmlspecialchars($_SESSION['login']); ?></b></h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" style="color: #FFFF99">
                            <h6>Se déconnecter</h6>
                        </a>
                    </li>
                </form>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="form-group">
                        <br><br><br>
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-danger btn-lg btn-block">
                                <a href="views/AffichageUE.php" style="color: #FFFF99">Voir les Unités d'Enseignement enregistrées</a>
                            </button>
                            <br><br><br><br>
                            <button type="button" class="btn btn-danger btn-lg btn-block">
                                <a href="views/AffichageEC.php" style="color: #FFFF99">Voir les Elements Constitutifs enregistrés</a>
                            </button>
                            <br><br><br><br>
                            <button type="button" class="btn btn-danger btn-lg btn-block">
                                <a href="views/AffichageProf.php" style="color: #FFFF99">Voir les Professeurs enregistrés</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>