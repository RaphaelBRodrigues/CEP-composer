<?php
 namespace raphael\dio;

class Search{

private $url = "https://viacep.com.br/ws/";

public function getAddress(string $cep):array{$url = "https://viacep.com.br/ws/";

$get = file_get_contents($url.$cep.'/json');
return (array) json_decode($get);
}


}
 ?>
