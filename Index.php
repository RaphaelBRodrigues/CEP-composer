<?php
require_once "vendor/autoload.php";


use raphaelbrodrigues\dio\Search;


$busca = new Search;
$res = $busca->getAddress("05880250");

echo "Sua rua é:".$res['logradouro'];
echo "\n Seu Cep é:".$res['cep'];
 ?>
