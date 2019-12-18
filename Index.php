<?php








function getAddress(string $cep):array{
  $url = "https://viacep.com.br/ws/";

  $get = file_get_contents($url.$cep.'/json');
return (array) json_decode($get);
}

$cep = '05880-250';
$cep = str_replace("-",'',$cep);

$req = getAddress($cep);
echo "Seu Cep é:".$cep;
echo "\n <br>Sua Rua é:".$req['logradouro'];
 ?>
