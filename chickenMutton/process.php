<?php 
  session_start();

  $con= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123');
    
  $db="3455539_retinue";
    
  mysqli_select_db($con,'3455539_retinue');
    
  if (isset($_POST["chicken"])){
    if (isset($_SESSION["cart"])){
      $count = count($_SESSION["cart"]);
      $item_array = array(
        ""
        );
    }
  }


?>