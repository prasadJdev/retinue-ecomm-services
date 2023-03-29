<?php 
if(isset($_POST['done'])){
  
  $con= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123');
  
  $db="3455539_retinue";
  
  mysqli_select_db($con,'3455539_retinue');
  
  $name=$_POST['service'];

  
  $reg= "ALTER TABLE `service` ADD `$name` BOOLEAN NULL DEFAULT FALSE ";
  
  mysqli_query($con,$reg);
  
}
// Display From Database

if (isset($_POST['service_display'])){
  function get_data (){
    $con= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123');
    
    $db="3455539_retinue";
    
    mysqli_select_db($con,'3455539_retinue');
    
      $s = "SELECT * FROM service";
      $result = mysqli_query($con,$s);
      $resultArray = array();
      while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $resultArray[] = $item;
      }
      return $resultArray;
    }
    $serviceData = get_data();
    $columns = implode(',',array_keys($serviceData));
  
    foreach($columns as $item){
   echo`
      <p><?php echo $item ;?></p>`;
   
  }
  exit();
}

?>