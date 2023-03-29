<?php
// Edit
//$con= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123','3455539_retinue');
//$db="3455539_retinue";
//mysqli_select_db($con,'3455539_retinue');
//$con= mysqli_connect('localhost','root','123456','delivery');
require_once('con.php');
if(isset($_POST['shopEdit'])){
     
    $id = mysqli_real_escape_string($con,$_POST['id']);

    $name = mysqli_real_escape_string($con,$_POST['newName']);

    $postinsertQuery = "UPDATE `shop` SET shopName = '$name' WHERE `shop`.`id` = '$id'";
    $iquery = mysqli_query($con,$postinsertQuery);

    if ($iquery) {
      echo("Successfully Updated");
      }
      else {
        echo('Failed To Update');
      }
}


//$con= mysqli_connect('localhost','root','123456','delivery');

if(isset($_POST['shopDelete'])){
     
    $idD = mysqli_real_escape_string($con,$_POST['id']);

    //$name = mysqli_real_escape_string($con,$_POST['newName']);
      
    $postinsertQuery = "DELETE FROM `shop` WHERE `shop`.`id` = '$idD'";
    $iquery = mysqli_query($con,$postinsertQuery);

    if ($iquery) {
      echo("Successfully Deleted");
      }
      else {
        echo('Failed To Delete');
      }
}



?>

