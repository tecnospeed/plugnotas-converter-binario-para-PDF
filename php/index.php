<?php
$idDaNota = '5ea1f1444c3ebafb7ecf5f39';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL =>  'https://api.sandbox.plugnotas.com.br/nfe/'.$idDaNota.'/pdf',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'x-api-key: 2da392a6-79d2-4304-a8b7-959572c7e44d'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$arquivo = file_put_contents('NFE - '.$idDaNota.'.pdf',$response);
