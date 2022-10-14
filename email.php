


<!-- Formulaire 2 -->

<?php
$email=$_POST["email"];
$valider2=$_POST["valider2"];
?> 

<p>

<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
   echo 'Vous utilisez Internet Explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
    echo 'Vous utilisez  Internet Explorer';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
   echo 'Vous utilisez  Mozilla Firefox';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
   echo 'Vous utilisez  Google Chrome';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
   echo "Vous utilisez  Opera Mini";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
   echo "Vous utilisez  Opera";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
   echo "Vous utilisez Safari";
 else
   echo 'Je ne reconnais pas votre navigateur';
?>
</p>

<?php
echo "adresse email : $email"
?>