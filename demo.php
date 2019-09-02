<?php
// 引入apiphp

include "pay.php";
$url='https://xxxxxxx';				//api请求url
$accessKey='xxxxxxxxxxxxxxxx';     //apiAccessKey
$secretKey='xxxxxxxxxxxxxxxx';     //apiSecretKey

$reqr=new Pay(,'3BDAF00B6F374A01A4DFBE32257F7E05','1C1D365EEEAB40FD8E56901E27243DA0');


var_dump($req->getTicker('BTC'));



?>