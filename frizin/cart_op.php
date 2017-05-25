<?php
$prod_id = 0;

if(isset ($_GET['product']))
	{
	$prod_id = $_GET['product'];
	}

$pack = 0;

if(isset ($_GET['quantity']))
	{
	$pack = $_GET['quantity'];
	}
$prod_id = (string)$prod_id;
$pack    = (string)$pack;
if(strlen($prod_id) == 1) $prod_id = "0000".$prod_id;
else if(strlen($prod_id) == 2) $prod_id = "000".$prod_id;
else if(strlen($prod_id) == 3) $prod_id = "00".$prod_id;
else if(strlen($prod_id) == 4) $prod_id = "0".$prod_id;  

if(strlen($pack) == 1) $pack = "0".$pack;

$add_cart = $prod_id.$pack;

echo $add_cart;

?>
