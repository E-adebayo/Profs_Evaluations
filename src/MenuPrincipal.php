<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

require_once __DIR__ . '/../config/connexion.php';
$ac = new Connexion();
$con = $ac->connection();

$class = isset($_POST['class']) ? htmlspecialchars($_POST['class']) : '';

$stmt = $con->prepare("
    SELECT 
        Libelle_CLASSE,
        Libelle_UE,
        Libelle_EC,
        Nom_Prof,
        Prenom_Prof 
    FROM CLASSE S 
    INNER JOIN INTERVENIR I ON S.Code_CLASSE = I.FK_Code_CLASSE 
    INNER JOIN UE U ON I.FK_Code_UE = U.Code_UE 
    INNER JOIN ENSEIGNER E ON U.Code_UE = E.FK_Code_UE 
    INNER JOIN EC C ON E.FK_Code_EC = C.Code_EC 
    INNER JOIN FAIRE F ON C.Code_EC = F.FK_Code_EC 
    INNER JOIN PROFESSEUR P ON F.FK_Code_PROF = P.Code_PROF 
    WHERE Code_CLASSE = :class
");

$stmt->execute(['class' => $class]);
$data = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Institut Africain d'informatique - Menu Principal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/image/iai2.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
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
                    <a class="nav-link" href="#" style="color: #FFFF99">
                        <h6>Bienvenue <b><?php echo htmlspecialchars($_SESSION['login']); ?></b></h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" style="color: #FFFF99">
                        <h6>Se déconnecter</h6>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-warning" style="color: red">
                        <thead>
                            <tr>
                                <th>Classe</th>
                                <th>Unité d'Enseignement</th>
                                <th>Élément Constitutif</th>
                                <th>Professeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['Libelle_CLASSE']); ?></td>
                                <td><?php echo htmlspecialchars($row['Libelle_UE']); ?></td>
                                <td><?php echo htmlspecialchars($row['Libelle_EC']); ?></td>
                                <td>
                                    <a href="evaluer.php" style="color: red">
                                        <?php echo htmlspecialchars($row['Nom_Prof'] . ' ' . $row['Prenom_Prof']); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>


