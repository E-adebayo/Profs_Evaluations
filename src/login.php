<?php
session_start();

require_once __DIR__ . '/../config/connexion.php';
$ac = new Connexion();
$bdd = $ac->connection();

if (isset($_POST['connecter'])) {
    $login = htmlspecialchars($_POST['login']);
    $password = sha1($_POST['password']);
    $class = htmlspecialchars($_POST['class']);
    
    if (!empty($login) && !empty($password)) {
        $requser = $bdd->prepare("SELECT * FROM UTILSATEUR WHERE login = :login AND password = :password AND FK_Code_CLASSE = :class");
        $requser->execute([
            'login' => $login,
            'password' => $password,
            'class' => $class
        ]);
        $userinfo = $requser->fetch();
        
        if ($userinfo !== false) {
            $_SESSION['login'] = $login;
            $_SESSION['FK_Code_CLASSE'] = $class;
            
            if ($login !== 'admin' || $password !== sha1('admin')) {
                header("Location: controllers/MenuPrincipal.php");
            } else {
                header("Location: controllers/Administrateur.php");
            }
            exit();
        } else {
            $erreur = "Mauvais login ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Institut Africain d'informatique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/image/iai2.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
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
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #FFFF99">
                        <h6>Accueil</h6>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <?php if(isset($erreur)): ?>
                        <div class="error-message">
                            <h4><?php echo htmlspecialchars($erreur); ?></h4>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" class="text-white">
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" id="login" name="login" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="class">Classe</label>
                            <select class="form-control" id="class" name="class" required>
                                <option value="L1">L1</option>
                                <option value="L2">L2</option>
                                <option value="L3G">L3 GLSI</option>
                                <option value="L3S">L3 SIGL</option>
                                <option value="L3A">L3 ASR</option>
                            </select>
                        </div>
                        <button type="submit" name="connecter" class="btn btn-primary btn-block mt-4">Se connecter</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="Inscription.php" class="text-white">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>