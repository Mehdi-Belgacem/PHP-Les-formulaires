<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page User exercice 2:</h1>
    <?php 
        if (isset($_POST['firstName']) && isset($_POST['lastName'])) { ?>
            <p><?= 'Votre identité est confirmé !'; ?></p><?php
        }else { ?>
            <p><?= 'vous n\'avez pas entrée de coordonné valide'; ?></p> <?php
        }
    ?>
</body>
</html>