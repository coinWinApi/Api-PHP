<?php
// 引入apiphp

include "pay.php";
$url='https://xxxxxxx';				//api请求url
$accessKey='xxxxxxxxxxxxxxxx';     //apiAccessKey
$secretKey='xxxxxxxxxxxxxxxx';     //apiSecretKey

$reqr=new Pay($url,$accessKey,$secretKey);


var_dump($req->getTicker('BTC'));



?>
