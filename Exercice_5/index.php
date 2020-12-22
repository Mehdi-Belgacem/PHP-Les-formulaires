

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
  <title>Partie 7 Exercice 5:</title>
</head>

<body>
  <h1>Partie 7 Exercice 5:</h1>
  <div class="container">
    <?php
    $formErrors = array();
    if ($_POST || $_GET)
    { 
      if (!empty($_POST['civility']))
      { ?>
        <p><?= $_POST['civility']; ?></p> <?php
      }
      else
      {
        $formErrors['civility'] = 'Veuillez séléctionner un élément';
        if (!empty($_POST['lastName']))
        { ?>
          <p><?= $_POST['lastName']; ?></p> <?php
        }
        else
        {
          $formErrors['lastName'] = 'Veuillez saisir votre nom de famille';
        }
        if (!empty($_POST['firstName']))
        { ?>
          <p><?= $_POST['firstName']; ?></p> <?php
        }
        else
        { 
          $formErrors['firstName'] = 'Veuillez saisir votre prénom';
        }
      }
    } else {?>
    <form method="POST" action="index.php">
      <div class="form-group">
        <label class="control-label" for="firstName">Prénom</label>
        <input class="form-control <?= isset($formErrors['firstName']) ? 'is-invalid' : '' ?>" type="text" name="firstName" id="firstName" placeholder="Jean" />
        <?php if (isset($formErrors['firstName']))
        { ?>
          <div class="invalid-feedback">
            <!-- Feedback est une classe qui va afficher notre message d'erreur sous le champs -->
            <?= $formErrors['firstName']; ?>
          </div>
        <?php } ?>
      </div>
      <div class="form-group">
        <label class="control-label" for="lastName">Nom</label>
        <input class="form-control <?= isset($formErrors['firstName']) ? 'is-invalid' : '' ?>" type="text" name="lastName" id="lastName" placeholder="Dupont" />
        <?php if (isset($formErrors['lastName']))
        { ?>
          <div class="invalid-feedback">
            <!-- Feedback est une classe qui va afficher notre message d'erreur sous le champs -->
            <?= $formErrors['lastName']; ?>
          </div>
        <?php } ?>
      </div>
      <div class="form-group">
        <label class="control-label" for="civility">Civilité</label>
        <select class="form-control <?= isset($formErrors['civility']) ? 'is-invalid' : '' ?>" name="civility" id="civility">
          <option value="choose" selected disabled>Choisir</option>
          <option value="Homme">Homme</option>
          <option value="Femme">Femme</option>
        </select>
        <?php if (isset($formErrors['civility']))
        { ?>
          <div class="invalid-feedback">
            <!-- Feedback est une classe qui va afficher notre message d'erreur sous le champs -->
            <?= $formErrors['civility']; ?>
          </div>
        <?php } ?>
      </div>
      <br>
      <input class="btn btn-success" type="submit" value="S'identifier">
    </form>
    <?php } ?>
  </div>
</body>

</html>