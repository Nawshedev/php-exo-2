


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

<section class="form1">
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

</section>


<!-- Formulaire 2 -->

<h2>Email client</h2>

<section class="form2">

<form action="email.php" method="post">

<label for="email">E-mail</label>
<input type="email" name="email" id="" required><br>

<input type="submit" value="Envoyer" name="valider2"><br>


</form>

</section>


<!-- Formulaire 3 -->

<h2>Prix TTC</h2>

<?php
  if(isset($_POST['HT']) && isset($_POST ["TVA"]) ){
    $TVArate=$_POST["TVA"];
    $HT=$_POST["HTprice"];
    $TVAamount=$TVArate*$HT;
    $TTC=$HT+$TVAamount;
    echo "Le montant de la TVA est de: ".$TVAamount."% <br>Le prix TTC est de :".$TTC;
  }
  ?>

<section class="form3">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="HTprice">Prix HT</label>
  <input type="number" name="HTprice" id=""><br>

  <label for="TVA">Taux de TVA</label>
  <input type="number" name="TVA" id=""><br>
  
  <input type="submit" value="Envoyer"><br>

  </form>

 
</section>

    
<script src="script.js"></script>
</body>
</html>