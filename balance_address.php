
<?php
//This file print balance of the specific address of BTC
require_once 'block_io.php';
 $apiKey = "replace apt key";
$version = 2; // API version
$password = "replace password";
$block_io = new BlockIo($apiKey, $password, $version);
$getBalance=$block_io->get_balance();
$balance_address=$block_io->get_address_balance(array('addresses' => 'replace your BTC address here'));


echo "Balance of address = ".$balance_address->data->available_balance;

?>
