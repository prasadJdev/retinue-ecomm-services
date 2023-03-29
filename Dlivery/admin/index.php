<?php
//$con = mysqli_connect("localhost","root","123456","delivery");
require_once('con.php');
function fillShop($con){
  $output = array();
  $sql = " SELECT * FROM shop";
  $result = mysqli_query($con,$sql);
  while($shop = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $output[] = $shop;
  }
  
  return $output;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="theme-color" content="#61305d" />
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#61305d">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#61305d">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#61305d">
  <meta charset="UTF-8">
  <!--Import Google Icon Font   content="#2196f3"-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" integrity="sha512-t38vG/f94E72wz6pCsuuhcOPJlHKwPy+PY+n1+tJFzdte3hsIgYE7iEpgg/StngunGszVMrRfvwZinrza0vMTA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="semantic/semantic.min.css" type="text/css" media="all" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.pp.css" type="text/css" media="all" />
    <link rel="stylesheet" href="./main.min.css">
   <title>ADMIN</title>
</head>
<body>
    <div class="container">
    
    <div class="right">
      <a href="#addShop" class="btn btn-small blue lighten-3 white-text"> + ADD</a>
    </div>

<table class="highlight z-depth-2 centered striped">
        <thead>
          <tr>
              <th>Sl No.</th>
              <th>Shop Name</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
<?php
$shops = fillShop($con);
foreach ($shops as $item){ ?>
    <tr>
    <td><?php echo $item["id"] ;?></td>
    <td><?php echo $item["shopName"] ;?></td>
    <td class="action">
        <div class="shopEdit">
        <a href="#modal1"  class=" btn blue lighten-2 waves-effect waves-light">Edit </a>
        
    </div>
    <input type="hidden" name="" class="shopEditId" value="<?php echo $item["id"] ;?>">    
    <div class="shopDelete">  
        <a href="#!"  class="btn pink lighten-1 waves-effect waves-light">X</a>
    </div>
    <input type="hidden" name="" class="shopDeleteId" value="<?php echo $item["id"] ;?>">    
    </td>
  </tr>

<?php
}
?>
        </tbody>
      </table>
            
      </div>

<!-- Modal For update Structure -->
<div id="modal1" class="modal bottom-sheet">
  <div class="modal-content">
    <h4 class="oldName"></h4>
  <input type="text" name="" class="shopNewName" id="">
</div>
  <div class="modal-footer">
  <a href="#!" class="modal-close waves-effect red waves-light btn-flat white-text">Discard</a>
  <a href="#!" class="modal-close waves-effect waves-light btn-flat" id="editUpdate" >Update</a>
  </div>
</div>



  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js" integrity="sha512-m2PhLxj2N91eYrIGU2cmIu2d0SkaE4A14bCjVb9zykvp6WtsdriFCiXQ/8Hdj0kssUB/Nz0dMBcoLsJkSCto0Q==" crossorigin="anonymous"></script>
  <script src="semantic/semantic.min.js" type="text/javascript" charset="utf-8"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="main.pp.js"></script>
<script src="./main.js"></script>    
</body>
</html>