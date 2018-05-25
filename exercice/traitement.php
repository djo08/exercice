<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/exercice.css">
    <title>exercice</title>
  </head>
<body>
  <?php include("header.php") ?>
  <?php

$_date = date("Y-m-d");

if(isset($_POST)) {
  if (isset($_POST["genre"])) {
    $genre = $_POST["genre"];
  }
  if (isset($_POST["prenom"])) {
    $prenom =$_POST["prenom"];
  }
  if (isset($_POST["nom"])) {
    $nom =$_POST["nom"];
  }
  if (isset($_POST["e-mail"])) {
    $email =$_POST["e-mail"];
  }
  if (isset($_POST["moi"])) {
    $moi =$_POST["moi"];
  }
  if (isset($genre) && isset($prenom) && isset($nom)) {

echo '<div id="megabloc">';
echo '<div id="blochaut">';
echo '<span id="demande">demande prise en compte</span>';
echo '</div>';

echo '<div id="fixcontour">';
echo '<div id="contourfixe">';

echo '<div id="prefix">';
echo '<p>titre : </p>';
echo '<p>prenom : </p>';
echo '<p>nom : </p>';
if (isset($email)){
  echo '<p>email:</p>';
}
echo '</div>';

echo '<div id="sufix">';
echo "<p>".$genre."</p>";
echo "<p>".$prenom."</p>";
echo "<p>".$nom."</p>";
if (isset($email)){
  echo "<p>".$email."</p>";
}
echo '</div>';
echo '</div>';
echo '</div>';
if(isset($moi)){

  echo '<div id="blocbas">';

  echo 'la case se souvenir de moi est bien coché';
echo '</div>';
}
echo '</div>';


if(!empty($_POST['moi'])){
  $croix = 1;
}
else{
  $croix = 0;
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_base";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO user (titre, nom, prenom, email, souvenir,date_creation)
VALUES ('$genre', '$nom', '$prenom', '$email', '$croix', '$_date')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);





  }
}
else {
  echo 'erreur';
}
  ?>

</body>
</html>
