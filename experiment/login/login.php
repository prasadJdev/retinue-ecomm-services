<?php 
  $con= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123','3455539_retinue');
  $db="3455539_retinue";
  mysqli_select_db($con,'3455539_retinue');
      print_r($db_password);
      
  // For  Sign In Validations 
  if(isset($_POST['signIn'])){
      $signIn_name = mysqli_real_escape_string($con,$_POST['signIn_Name']);
      $signIn_password = mysqli_real_escape_string($con,$_POST['signIn_Password']);
      
      
      $signIn_query = "SELECT * FROM elogin ";
      $signInQ = mysqli_query($con,$signIn_query);
      
      
      
      // Have To Verify the User Name
      $userQ = "SELECT * FROM elogin WHERE name = '$signIn_name'";
      $uquery = mysqli_query($con,$userQ);
      $nameCount = mysqli_num_rows($uquery);
      
      if ($nameCount > 0){
      
      $db_password = mysqli_fetch_assoc($uquery);
      $password = $db_password['password'];
      print_r($db_password);
      $pass = password_verify($signIn_password,$password);
      //if ($db_password['name']===$signIn_name){
     
     
      if ($pass==1){
        echo("Successfully Signed In...");
        ?>
        <script>
        location.replace("http://theretinue.atspace.cc/experiment/");
        </script>
        <?php
        //header("Location: http://septo.atspace.cc/@dm1n/");
      }else{
        echo("Password Incorrect");
      }
      }else{
        echo("Invalid User Name ");
      }
    }
  
  // For Sign Up 
  if(isset($_POST['signUp'])){
      $signUp_name = mysqli_real_escape_string($con,$_POST['signUp_Name']);
      $signUp_email = mysqli_real_escape_string($con,$_POST['signUp_Email']);
      $signUp_password = mysqli_real_escape_string($con,$_POST['signUp_Password']);
      $spass = password_hash($signUp_password, PASSWORD_DEFAULT);
      $emailQuery = "SELECT * FROM elogin WHERE email= '$signUp_email'";
      $query = mysqli_query($con,$emailQuery);
      $emailCount = mysqli_num_rows($query);
      if ($emailCount > 0){
        echo("This Email Id Has Been Taken");
      }else {
        $signUpinsertQuery = "INSERT INTO elogin(name, email, password) VALUES ('$signUp_name', '$signUp_email', '$spass')";
        $iquery = mysqli_query($con,$signUpinsertQuery);
        echo("Successfully Signed Up ");
      }
    }
?>