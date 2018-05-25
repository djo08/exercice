
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/exercice.css">
    <title>exercice</title>
  </head>
<body>

<?php include("header.php"); ?>

<form action="traitement.php" method="post" id="form1">
  <div id="grosbloc">
    <div id="moyenbloc">
<div id="bloc1">
  <div id="labels">
    <label>Titre <span class="red">*</span> : </label>
    <label>Prénom <span class="red">*</span>  : </label>
    <label>Nom <span class="red">*</span>  : </label>
    <label>E-mail : </label>
  </div>
</div>

<div id="bloc2">
  <div id="type">
    <div id="bouton">
      <div id="bouton1">
        <input type="radio" name="genre" value="Mme" checked="checked"><label>Mme</label>
      </div>
      <div id="bouton2">
        <input type="radio" name="genre" value="Mr"><label>Mr</label>
      </div>
    </div>
    <input type="text" id="prenom" name="prenom">
    <input type="text" id="nom" name="nom" />
    <input type="e-mail" id="e-mail" name="e-mail" />
  </div>
</div>
</div> <!-- Moyen bloc -->

<div id="souvenir">
  <input type="checkbox" name="moi" value="on"><label> se souvenir de moi</label>
</div>

<div id="envoyer">
  <input id="submit" type="submit" value="Envoyer"/>
</div>
</div>
</form>
<script src="js/exercice.js"></script>
</body>
</html>
