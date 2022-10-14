


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire PHP</title>
</head>
<body>

<section class=left>
<div class="form1">
<form action="traitement.php" method="post">

<h2>Adresse client</h2>
<label for="name">Nom</label>
<input type="text" name="name" id="name" class="control"> <br>
<p id="missing"></p>

<label for="firstname">Prénom</label>
<input type="text" name="firstname" id="firstName" class="control"><br>
<p id="missing"></p>

<label for="address">Adresse</label>
<input type="text" name="address" id="address" class="control"><br>
<p id="missing"></p>

<label for="city">Ville</label>
<input type="text" name="city" id="city" class="control"><br>
<p id="missing"></p>

<label for="postcode">Code postal</label>
<input type="number" name="postcode" id="postcode" class="control"><br>
<p id="missing"></p>

<input type="submit" value="Envoyer" id="btnSend">
<br>



</form>

</div>


<!-- Formulaire 2  - exercice 3-->

<h2>Email client</h2>

<div class="form2">

<form action="email.php" method="post">

<label for="email">E-mail</label>
<input type="email" name="email" required><br>

<input type="submit" value="Envoyer" name="valider2"><br>


</form>

</div>


<!-- Formulaire 3 - exercice 4-->

<h2>Prix TTC</h2>

<?php

$TVArate=$HT="";


if($_SERVER["REQUEST_METHOD"]=="POST" && isset($TVArate) && isset($HT) && !empty($TVArate) && !empty($HT)){
  $TVArate=$_POST["TVA"];
  $HT=$_POST["HTprice"];
  $TVAamount=$TVArate * $HT;
  $TTC=$HT+$TVAamount;
  $priceShowing="Le montant de la TVA est de: ".$TVAamount."€<br> Le prix TTC est de: ".$TTC."€";
  $error="";
}
else{
  $priceShowing="";
}

  
  ?>

<div class="form3">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="HTprice">Prix HT</label>
  <input type="number" name="HTprice" id="" value="<?php echo $HT?>"><br>

  <label for="TVA">Taux de TVA</label>
  <input type="number" name="TVA" id="" value="<?php echo $TVArate?>"><br>

  <br>

  <p><?php echo $priceShowing ?></p>
  
  <input type="submit" value="Envoyer"><br>

  </form>

</div>
</section>



<section class="right">

<div class="filesTransfer">

  <!-- Formulaire 4 - exercice 5 -->

  <?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fileName=$_POST["file"];

  }
  else{
    $fileName="";
  }
  ?>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

<h2>Formulaire pour transférer un fichier ZIP </h2>

<label for="file">Choisissez un fichier :</label><br>

<input type="file" name="file" /><br>

<!-- <p><?php echo $error?></p> -->

<p><?php echo "le fichier ".$fileName." a bien été envoyé"?></p>
<input type="submit" value="envoyer le fichier"/><br>




</form>







</div>


</section>



    
<script src="script.js"></script>
</body>
</html>