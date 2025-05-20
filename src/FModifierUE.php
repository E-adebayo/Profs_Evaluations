<?php
session_start();
require_once __DIR__ . '/../config/connexion.php';

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

$ac = new Connexion();
$con = $ac->connection();

$ue_id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : null;

// Fetch existing UE data
if ($ue_id) {
    $stmt = $con->prepare("SELECT * FROM ue WHERE Code_UE = :id");
    $stmt->execute(['id' => $ue_id]);
    $ue = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['modifier'])) {
    $code_ue = htmlspecialchars($_POST['Code_UE']);
    $libelle_ue = htmlspecialchars($_POST['Libelle_UE']);

    try {
        $stmt = $con->prepare("UPDATE ue SET Libelle_UE = :libelle WHERE Code_UE = :code");
        $stmt->execute([
            'code' => $code_ue,
            'libelle' => $libelle_ue
        ]);
        header("Location: AffichageUE.php");
        exit();
    } catch(PDOException $e) {
        $error = "Une erreur est survenue lors de la modification de l'UE.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modifier une UE - IAI-TOGO</title>
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
                    <h5 class="nav-link text-white">Modification d'une UE</h5>
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
                            <input type="text" class="form-control" id="Code_UE" name="Code_UE" 
                                   value="<?php echo isset($ue['Code_UE']) ? htmlspecialchars($ue['Code_UE']) : ''; ?>" 
                                   readonly>
                        </div>
                        <div class="form-group">
                            <label for="Libelle_UE">Libellé UE</label>
                            <input type="text" class="form-control" id="Libelle_UE" name="Libelle_UE" 
                                   value="<?php echo isset($ue['Libelle_UE']) ? htmlspecialchars($ue['Libelle_UE']) : ''; ?>" 
                                   required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                            <a href="AffichageUE.php" class="btn btn-secondary">Retour</a>
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
