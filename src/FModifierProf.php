<?php
session_start();
require_once __DIR__ . '/../config/connexion.php';

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

$ac = new Connexion();
$con = $ac->connection();

$prof_id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : null;

// Fetch existing professor data
if ($prof_id) {
    $stmt = $con->prepare("SELECT * FROM professeur WHERE Code_PROF = :id");
    $stmt->execute(['id' => $prof_id]);
    $prof = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['modifier'])) {
    $code_prof = htmlspecialchars($_POST['Code_PROF']);
    $nom_prof = htmlspecialchars($_POST['Nom_Prof']);
    $prenom_prof = htmlspecialchars($_POST['Prenom_Prof']);

    try {
        $stmt = $con->prepare("UPDATE professeur SET Nom_Prof = :nom, Prenom_Prof = :prenom WHERE Code_PROF = :code");
        $stmt->execute([
            'code' => $code_prof,
            'nom' => $nom_prof,
            'prenom' => $prenom_prof
        ]);
        header("Location: AffichageProf.php");
        exit();
    } catch(PDOException $e) {
        $error = "Une erreur est survenue lors de la modification du professeur.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modifier un Professeur - IAI-TOGO</title>
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
                    <h5 class="nav-link text-white">Modification d'un professeur</h5>
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
                            <label for="Code_PROF">Code Professeur</label>
                            <input type="text" class="form-control" id="Code_PROF" name="Code_PROF" 
                                   value="<?php echo isset($prof['Code_PROF']) ? htmlspecialchars($prof['Code_PROF']) : ''; ?>" 
                                   readonly>
                        </div>
                        <div class="form-group">
                            <label for="Nom_Prof">Nom</label>
                            <input type="text" class="form-control" id="Nom_Prof" name="Nom_Prof" 
                                   value="<?php echo isset($prof['Nom_Prof']) ? htmlspecialchars($prof['Nom_Prof']) : ''; ?>" 
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="Prenom_Prof">Prénom</label>
                            <input type="text" class="form-control" id="Prenom_Prof" name="Prenom_Prof" 
                                   value="<?php echo isset($prof['Prenom_Prof']) ? htmlspecialchars($prof['Prenom_Prof']) : ''; ?>" 
                                   required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
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
