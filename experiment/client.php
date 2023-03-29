<?php
//                                                AND                              CUSTOMERS               AND                        YOUR TIME
// Add Clients Data To Our Database
require('functions.php');

$client_name = $_POST['client_name'];
$client_shop = $_POST['client_shop'];
$shop_open = $_POST['client_shop_open'];
$shop_close = $_POST['client_shop_close'];
$client_email = $_POST['client_email'];
$services = $_POST['client_services'];
$client_message = $_POST['client_message'];
echo ($client_name.$client_shop );

function addToClients($client_name,$client_email,$client_shop ,$services,$shop_open,$shop_close,$client_message) {
 
 if (isset($client_name) && isset ($client_shop )){

  $param = array(
    "name" => $client_name,
    "email" => $client_email,
    "shop" => $client_shop,
    "services" => $services,
    "shop_open" => $shop_open,
    "shop_close" => $shop_close,
    "message" => $client_message
  );
  echo ($insertIntoTable);
  // Insert Data into Clients Table
  $result = $insertIntoTable -> insertIntoTable($param);
  if ($result){
    //reload Page 
    header("Location:" .$_SERVER['PHP_SELF']);
  }
 }
}
 
 if ($_SERVER['REQUEST_METHOD']=="POST"){
 addToClients($client_name,$client_email,$client_shop ,$services,$shop_open,$shop_close,$client_message) ;
 
 }
 
?>