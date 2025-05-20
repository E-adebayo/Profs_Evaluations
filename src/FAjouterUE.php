<?php
session_start();
require_once __DIR__ . '/../config/connexion.php';

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['ajouter'])) {
    $ac = new Connexion();
    $con = $ac->connection();

    $code_ue = htmlspecialchars($_POST['Code_UE']);
    $libelle_ue = htmlspecialchars($_POST['Libelle_UE']);

    try {
        $stmt = $con->prepare("INSERT INTO ue (Code_UE, Libelle_UE) VALUES (:code, :libelle)");
        $stmt->execute([
            'code' => $code_ue,
            'libelle' => $libelle_ue
        ]);
        header("Location: AffichageUE.php");
        exit();
    } catch(PDOException $e) {
        $error = "Une erreur est survenue lors de l'ajout de l'UE.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ajouter une UE - IAI-TOGO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/image/iai2.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }
    </style>
</head>
<body style="background-image: url(../assets/image/IMG024.jpg); background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="col-md-9">
            <h1>
                <img src="../assets/image/iai2.png" width="80" alt="IAI-TOGO Logo">
                <a class="navbar-brand" href="#" style="color: white; font-family: algerian">
                    IAI-TOGO<br>
                    <p style="color: white; font-family: bell mt">La référence en matière d'informatique</p>
                </a>
            </h1>
        </div>
        <div class="col-md-3">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <h5 class="nav-link text-white">Ajout d'une UE</h5>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="Code_UE">Code UE</label>
                            <input type="text" class="form-control" id="Code_UE" name="Code_UE" required>
                        </div>
                        <div class="form-group">
                            <label for="Libelle_UE">Libellé UE</label>
                            <input type="text" class="form-control" id="Libelle_UE" name="Libelle_UE" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
