<?php

$name=$_POST["name"];
$firstname=$_POST["firstname"];
$address=$_POST["address"];
$city=$_POST["city"];
$postcode=$_POST["postcode"];


if(empty($name) || empty($firstname) || empty($address) || empty($city) || empty($postcode)){
   echo "merci de remplir tous les champs du formulaire";
   header("Location:index.php");
}
else{
    echo "formulaire bien reçu";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>traitement.php</title>
</head>
<body>

<table>
    <thead>
        Adresse Client
    </thead>
    <tbody>
        <tr>
            <td>Nom</td>
            <td><?php echo $name?></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php echo $firstname ?></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><?php echo $address?></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><?php echo $city?></td>
        </tr>
        <tr>
            <td>Code postal</td>
            <td><?php echo $postcode?></td>
        </tr>
    </tbody>
</table>

    
</body>
</html>

