<?php
$_nbraleatoire = rand(0,1000);
$_compteur = 1;
while (rand(0,1000) != $_nbraleatoire){
    $_compteur++;
}
echo $_compteur;
?>