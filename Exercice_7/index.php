<?php // var_dump($GLOBALS);
$errors = []; // Création d'un tableau vide pour les erreurs.
if ($_POST) { // Création d'une condition qui permet de savoir si des valeurs sont contenu dans le $_POST. Si valeur ça retourne (TRUE) sinon (FALSE).
  if (isset($_POST['lastName']) && $_POST['lastName'] != NULL) { // Si isset($_POST['lastName']) et $_POST['lastName'] sont différents de NULL.
    $lastName = $_POST['lastName']; // Création d'une variable qui va contenir $_POST['lastName'].
  } else {
    $errors[] = 'Votre nom n\'a pas été renseigné.'; // Sinon on retourne un message d'erreur.
  }
  if (isset($_POST['firstName']) && $_POST['firstName'] != NULL) { // Si isset($_POST['firstName']) et $_POST['firstName'] sont différents de NULL.
    $firstName = $_POST['firstName']; // Création d'une variable qui va contenir $_POST['firstName'].
  } else {
    $errors[] = 'Votre prénom n\'a pas été renseigné.'; // Sinon on retourne un message d'erreur.
  }
  if (isset($_POST['gender']) && $_POST['gender'] != 'choose') { // Si isset($_POST['gender']) et $_POST['gender'] sont différents de NULL.
    $gender = $_POST['gender']; // Création d'une variable qui va contenir $_POST['gender'].
  } else {
    $errors[] = 'Veullez selectionner un élément.'; // Sinon on retourne un message d'erreur.
  }
  if (isset($_FILES['documents']) && $_FILES['documents']['name'] != null ) {
    $file =  $_FILES['documents']['name'];
  } else {
    $errors[] = 'Veuillez selectionner un fichier valide.';
  }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 7 Exercice 7:</h1>
  <?php if ($errors) : ?> <!-- La condition seras établi uniquement dans le cas ou une erreur serais ajouter lors de la vérification des données rentrées par l'utilisateur. -->
    <ul>
    <?php foreach($errors as $error) : ?> <!-- Crée une liste qui va contenir chaque erreur contenu dans le tableau $errors. -->
      <li><?= $error ?></li>
    <?php endforeach; ?>
  </ul>
  <?php elseif ($_POST && !$errors) : ?> <!-- Si il y a des données et aucune erreur lors de la vérification alors on affiche les données rentrée par l'utilisateur. -->
    <p><?= 'Bonjour ' . $lastName . ' ' . $firstName . '.'; ?></p>
    <p><?= 'Le fichier ' . $file . ' a était envoyer.'; ?></p>
  <?php else : ?> <!-- l'Utilisateur n'a pas encore entrée de valeur.-->
    <form method="POST" action="index.php" enctype="multipart/form-data">
      <input type="text" name="firstName" id="firstName" placeholder="Dupont" />
      <input type="text" name="lastName" id="lastName" placeholder="Jean" />
      <select name="gender">
        <option value="choose" disabled selected>Choisir</option>
        <option value="Homme" name="gender">Homme</option>
        <option value="Femme" name="gender">Femme</option>
      </select>
      <input type="file" name="documents" id="file" placeholder="Envoyer un fichier">
      <input type="submit" value="S'identifier">
    </form>
  <?php endif; ?>
</body>
</html>