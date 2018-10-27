<?php
//This file create new BTC address yousing block.io 
//You should have block.io account with api key and password
require_once 'block_io.php';
 $apiKey = "replace your api key";
$version = 2; // API version
$password = "replace your password";
$block_io = new BlockIo($apiKey, $password, $version);

$newAddressInfo = $block_io->get_new_address();

echo "address ".$newAddressInfo->data->address."<br>";
echo "label ".$newAddressInfo->data->label."<br>";



?>
