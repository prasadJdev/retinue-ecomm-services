<?php 
if (isset($_POST['send'])){
  
$name = $_POST['name'];

$subject = "Email Received !!! ";

$mailTo = $_POST['email'];

//"edu.mail165@gmail.com";

$message = $_POST['message'];

$mailFrom= "support@septo.ml";

$header = "From :".$mailFrom;

$txt = "You have Received this Email From".$message;

mail($mailTo,$subject,$txt,$header);

//header("Location: http://septo.ml/Login/");

}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login || Sign Up</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>
  <div class="container">
    <div class="forms-container">
      
      <div class="signin-signup">
        
        <form class="sign-up-form" id="sign-up-form" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
          <div id="signup_success"></div>
          <h3>Send/\Receive Email</h3>
          
          <div class="input-field">
            <i class="far fa-envelope"></i>
            <input type="email" name="email" id="signUp_email" placeholder="Email Address" />
          </div>
          
          <div class="input-field">
            <i class="fas fa-user-alt"></i>
            <input type="text" name="name" id="signUp_username" placeholder="Name" />
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="text" name="message" id="signUp_password" placeholder="Message" />
          </div>
          
          <input type="submit" name="send" id="" class="btn solid" value="Send/\Receive" />
         
         
<!--           
<p class="social-text">Or Sign Up With Social Platform</p>
<div class="social-media">
  <a class="social-icon" href="#"><i class="fab fa-google"></i></a>
  <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
  <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
</div>
 -->        
        </form>
        <!---->
        <br><br>
        <hr>
        <br><br>
        
        <form class="sign-in-form" method="POST" accept-charset="utf-8">
          <div id="signin_success"></div>
          <h2>Sign In</h2>
          
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="signIn_username" id="signIn_username" placeholder="User Name" />
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="signIn_password" id="signIn_password" placeholder="Password" />
          </div>
          
          <input type="submit" name="signIn" id="signIn" class="btn solid" value="Sign In" />
          
          
          <p class="social-text">Or Sign In With Social Platform</p>
          <div class="social-media">
            <a class="social-icon" href="#"><i class="fab fa-google"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
          </div>
       
        </form>
        <br><br>
        <hr>
        <br><br>
        <!-- SignUp Form -->
        
        <form class="sign-up-form" id="sign-up-form" action="" method="POST" accept-charset="utf-8">
          <div id="signup_success"></div>
          <h2>Sign Up</h2>
          
          <div class="input-field">
            <i class="fas fa-user-alt"></i>
            <input type="text" name="signup_username" id="signUp_username" placeholder="User Name" />
          </div>
          
          <div class="input-field">
            <i class="far fa-envelope"></i>
            <input type="email" name="signup_email" id="signUp_email" placeholder="Email Address" />
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="signUp_password" id="signUp_password" placeholder="Password" />
          </div>
          
          <input type="submit" name="signUp" id="signUp" class="btn solid" value="Sign Up" />
         
         
          <p class="social-text">Or Sign Up With Social Platform</p>
          <div class="social-media">
            <a class="social-icon" href="#"><i class="fab fa-google"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
          </div>
        
        </form>
        
        <br><br>
        
      </div>
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ec2ebb3023.js" crossorigin="anonymous"></script>
  <script src="main.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>
