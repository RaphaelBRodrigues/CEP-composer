<?php
// namespace raphael\dio;

class Search{

private $url = "https://viacep.com.br/ws/";

public function getAddress(string $cep):array{
$cep = preg_replace('/[^0-9]/im','',$cep);
//Arruma o formato do cep

$get = file_get_contents($this-> $url . $cep . "/json");
//Fazendo requisição e somando a url,cep e o json formando o link

print_r($get);
}


}
 ?>
