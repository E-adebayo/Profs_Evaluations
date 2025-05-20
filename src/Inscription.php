<?php
session_start();
require_once __DIR__ . '/../config/connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - IAI-TOGO</title>
    <link rel="shortcut icon" type="image/png" href="../assets/image/iai2.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            color: white;
        }
        .error-message {
            color: #FFFF99;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body style="background-image: url(../assets/image/a9.jpg); background-size: cover;">
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
                <li class="nav-item">
                    <a class="nav-link" href="login.php" style="color: #FFFF99">
                        <h6>Retour à la connexion</h6>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="text-center mb-4">Inscription</h2>
                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fname">Nom</label>
                                <input type="text" class="form-control" id="fname" name="fname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname">Prénom</label>
                                <input type="text" class="form-control" id="lname" name="lname" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="class">Classe</label>
                                <select class="form-control" id="class" name="class" required>
                                    <option value="L1">L1</option>
                                    <option value="L2">L2</option>
                                    <option value="L3G">L3 GLSI</option>
                                    <option value="L3S">L3 SIGL</option>
                                    <option value="L3A">L3 ASR</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tel">Téléphone</label>
                                <input type="tel" class="form-control" id="tel" name="tel" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" id="login" name="login" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <button type="submit" name="inscription" class="btn btn-primary btn-block">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <?php
    if(isset($_POST['inscription'])) {
        $ac = new Connexion();
        $con = $ac->connection();

        $nom = htmlspecialchars($_POST['fname']);
        $prenom = htmlspecialchars($_POST['lname']);
        $classe = htmlspecialchars($_POST['class']);
        $login = htmlspecialchars($_POST['login']);
        $password = sha1($_POST['password']);
        $telephone = htmlspecialchars($_POST['tel']);
        $email = htmlspecialchars($_POST['email']);

        try {
            $stmt = $con->prepare("INSERT INTO utilisateur (Nom_User, Prenom_User, FK_Code_CLASSE, login, password, Telephone, Email_User) 
                                 VALUES (:nom, :prenom, :classe, :login, :password, :telephone, :email)");
            
            $stmt->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'classe' => $classe,
                'login' => $login,
                'password' => $password,
                'telephone' => $telephone,
                'email' => $email
            ]);

            header("Location: login.php");
            exit();
        } catch(PDOException $e) {
            echo '<div class="alert alert-danger">Une erreur est survenue lors de l\'inscription.</div>';
        }
    }
    ?>
</body>
</html>

