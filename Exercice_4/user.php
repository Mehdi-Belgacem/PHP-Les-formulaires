<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page User exercice 4:</h1>
    <?php 
        if (!$_POST['firstName'] && !$_POST['lastName']) { ?>
            <p><?= 'Votre nom et votre prénom n\'ont pas été renseignés.'?></p><?php
        }elseif (!$_POST['firstName']) { ?>
            <p><?= 'Vous n\'avez pas entrée votre prénom.'; ?></p> <?php
        }elseif (!$_POST['lastName']) { ?>
            <p><?= 'Vous n\'avez pas entrée votre nom'; ?></p><?php
        }else { ?>
            <p><?= 'Votre identité est confirmé !'; ?></p> <?php
        }
    ?>
</body>
</html>