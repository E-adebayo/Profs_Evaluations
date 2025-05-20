<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

require_once __DIR__ . '/../config/connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Évaluation des Enseignements - IAI-TOGO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/image/iai2.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .evaluation-form {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        .section-title {
            color: #FFFF99;
            margin: 20px 0;
            text-align: center;
        }
        .satisfaction-level {
            margin-bottom: 15px;
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

    <div class="container">
        <h2 class="section-title">Formulaire d'évaluation des enseignements</h2>
        <form method="POST" class="evaluation-form">
            <div class="form-group">
                <label for="prof_code">Code Professeur</label>
                <input type="text" class="form-control" id="prof_code" name="Code_PROF" required>
            </div>

            <?php
            $criteria = [
                'mention1' => 'Organisation générale du cours',
                'mention2' => 'Plage horaire prévue pour le cours',
                'mention3' => 'Cadre logistique: matériel utilisé par l\'enseignant',
                'mention4' => 'Implication des étudiants dans le déroulement du cours',
                'mention5' => 'L\'enseignant respecte les tranches de cours prévues',
                'mention6' => 'L\'enseignant est disponible pour répondre aux questions',
                'mention7' => 'Les objectifs du cours sont clairement définis',
                'mention8' => 'Le contenu du cours correspond aux objectifs',
                'mention9' => 'Le cours était clair et détaillé',
                'mention10' => 'Le cours contient le plan, les objectifs, critères d\'évaluation, bibliographie'
            ];

            foreach ($criteria as $key => $label): ?>
                <div class="form-group satisfaction-level">
                    <label for="<?php echo $key; ?>"><?php echo htmlspecialchars($label); ?></label>
                    <select class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>" required>
                        <option value="Très Satisfait">Très Satisfait</option>
                        <option value="Satisfait">Satisfait</option>
                        <option value="Peu Satisfait">Peu Satisfait</option>
                        <option value="Insatisfait">Insatisfait</option>
                    </select>
                </div>
            <?php endforeach; ?>

            <div class="form-group">
                <label for="suggestion">Suggestions d'amélioration</label>
                <textarea class="form-control" id="suggestion" name="suggestion" rows="4"></textarea>
            </div>

            <button type="submit" name="evaluer" class="btn btn-primary btn-block">Soumettre l'évaluation</button>
        </form>
    </div>

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <?php
    if (isset($_POST['evaluer'])) {
        $ac = new Connexion();
        $con = $ac->connection();

        try {
            $stmt = $con->prepare("INSERT INTO evaluer (FK_Code_PROF, Mention1, Mention2, Mention3, Mention4, Mention5, 
                                 Mention6, Mention7, Mention8, Mention9, Mention10, Suggestion) 
                                 VALUES (:prof, :m1, :m2, :m3, :m4, :m5, :m6, :m7, :m8, :m9, :m10, :suggestion)");
            
            $stmt->execute([
                'prof' => htmlspecialchars($_POST['Code_PROF']),
                'm1' => htmlspecialchars($_POST['mention1']),
                'm2' => htmlspecialchars($_POST['mention2']),
                'm3' => htmlspecialchars($_POST['mention3']),
                'm4' => htmlspecialchars($_POST['mention4']),
                'm5' => htmlspecialchars($_POST['mention5']),
                'm6' => htmlspecialchars($_POST['mention6']),
                'm7' => htmlspecialchars($_POST['mention7']),
                'm8' => htmlspecialchars($_POST['mention8']),
                'm9' => htmlspecialchars($_POST['mention9']),
                'm10' => htmlspecialchars($_POST['mention10']),
                'suggestion' => htmlspecialchars($_POST['suggestion'])
            ]);

            echo '<div class="alert alert-success">Évaluation enregistrée avec succès!</div>';
        } catch(PDOException $e) {
            echo '<div class="alert alert-danger">Une erreur est survenue lors de l\'enregistrement.</div>';
        }
    }
    ?>
</body>
</html>