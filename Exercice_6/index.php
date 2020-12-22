<?php 
$errors = []; // Création d'un tableau vide pour les erreurs.
if ($_POST) { // Création d'une condition qui permet de savoir si des valeurs sont contenu dans le $_POST. Si valeur ça retourne (TRUE) sinon (FALSE).
  if (empty($_POST['lastName']) && $_POST['lastName'] != NULL) { // Si isset($_POST['lastName']) et $_POST['lastName'] sont différents de NULL.
    $lastName = $_POST['lastName']; // Création d'une variable qui va contenir $_POST['lastName'].
  } else {
    $errors[] = 'Votre nom n\'a pas été renseigné.'; // Sinon on retourne un message d'erreur.
  }
  if (empty($_POST['firstName']) && $_POST['firstName'] != NULL) { // Si isset($_POST['firstName']) et $_POST['firstName'] sont différents de NULL.
    $firstName = $_POST['firstName']; // Création d'une variable qui va contenir $_POST['firstName'].
  } else {
    $errors[] = 'Votre prénom n\'a pas été renseigné.'; // Sinon on retourne un message d'erreur.
  }
  if (empty($_POST['civility']) && $_POST['civility'] != 'choose') { // Si isset($_POST['gender']) et $_POST['gender'] sont différents de NULL.
    $gender = $_POST['civility']; // Création d'une variable qui va contenir $_POST['gender'].
  } else {
    $errors[] = 'Veullez selectionner un élément de la liste déroulante.'; // Sinon on retourne un message d'erreur.
  }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Partie 7 Exercice 6:</title>
</head>
<body>
  <h1>Partie 7 Exercice 6:</h1>
  <?php if ($errors) : ?> <!-- La condition seras établi uniquement dans le cas ou une erreur serait ajouter lors de la vérification des données rentrées par l'utilisateur. -->
    <ul>
    <?php foreach($errors as $error) : ?> <!-- Crée une liste qui va contenir chaque erreur contenu dans le tableau $errors. -->
      <li><?= $error ?></li>
    <?php endforeach; ?>
  </ul>
  <?php elseif ($_POST && !$errors) : ?> <!-- Si il y a des données et aucune erreur lors de la vérification alors on affiche les données rentrée par l'utilisateur. -->
    <p><?= 'Bonjour ' . $firstName . ' ' . $lastName . '.'; ?></p>
  <?php else : ?> <!-- l'Utilisateur n'a pas encore entrée de valeur.-->
    <form method="POST" action="index.php">
      <label for="firstName">Prénom</label>
      <input type="text" name="firstName" id="firstName" placeholder="Jean" />
      <label for="lastName">Nom</label>
      <input type="text" name="lastName" id="lastName" placeholder="Dupont" />
      <label for="civility">Civilité</label>
      <select name="civility" id="civility">
        <option value="choose">Choisir</option>
        <option value="man" name="civility">Homme</option>
        <option value="woman" name="civility">Femme</option>
      </select>
      <input type="submit" value="VALIDER" />
    </form>
  <?php endif; ?>
</body>
</html>