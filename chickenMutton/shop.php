<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shop || Chicken Mutton</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Slick Css CDN -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
 
</head>

<body class="bg-light py-10 p-1">
  <div class="shop">
    <div class="productBx">
      <img class="img-fluid productImg" src="Images/barbecue.png" alt="" />
      <hr class="separator1">
      <hr class="separator2">
      <div class="wish_div">
        <div class="wishImg"><i class="far fa-heart"></i></div>
      </div>
      <div class="productContent">
        <h4>Chicken &nbsp; <small>(RAW)</small></h4>
        <hr class="separator">
        <h6 class="text-left m-3">PRICE :</h6>
        <div class="flx "><s>₹200</s>&nbsp;&nbsp;₹120/kg*</div>
        <div class="flx text-small"> You Save: &nbsp; 80</div>
      </div>
      <hr class="separator">
      <div class="">
        <div class="form-group">
          <div class="col-6 col-sm-12 col-md-12">
            <!-- Quantity section -->
            <div class="qty text-center d-flex">
              <h6 class="galada font-300">Quantity</h6>
              <div class="px-4 mx-3 text-center d-flex ">
                <button class="qty-up btn"><i class="fas fa-angle-up"></i></button>
                <input type="text" id="chicken_input" class="qty_input border py-2 text-center bg-light" disabled value="1" placeholder="1" />
                <button class="qty-down btn"><i class="fas fa-angle-down"></i></button>
              </div>
            </div>
          </div>
          <!--
          <label for="exampleFormControlSelect1">Select Quantity</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1 kg</option>
            <option>2 kg</option>
            <option>3 kg</option>
            <option>4 kg</option>
            <option>5 kg</option>
          </select>
          -->
          
        </div>
        <a class="buy_nw" href="#" role="button">Buy Now &nbsp;&nbsp;<span><i class="fas fa-check-double"></i></span></a>
        <a class="buy_nw" id="add_chicken" href="#" role="button">Add To Cart &nbsp;&nbsp;<span><i class="fab fa-opencart"></i></span></a>
      </div>
    </div>
    <div class="productBx">
      <img class="img-fluid productImg" src="Images/barbecue.png" alt="" />
      <hr class="separator1">
      <hr class="separator2">
      <div class="wish_div">
        <div class="wishImg"><i class="far fa-heart"></i></div>
      </div>
      <div class="productContent">
        <h4>Mutton &nbsp; <small>(RAW)</small></h4>
        <hr class="separator">
        <h6 class="text-left m-3">PRICE :</h6>
        <div>
          <div class="flx"><s>₹1000</s>&nbsp;&nbsp;₹920/kg*</div>
          <div class="flx text-small"> You Save: &nbsp; 80</div>
        </div>
      </div>
      <hr class="separator">
      <div class="">
        <div class="form-group">
          <div class="col-6 col-sm-12 col-md-12">
            <!-- Quantity section -->
            <div class="qty text-center d-flex">
              <h6 class="font-300">Quantity</h6>
              <div class="px-4 mx-3 text-center d-flex ">
                <button class="qty-up btn"><i class="fas fa-angle-up"></i></button>
                <input type="text" id="mutton_input" class="qty_input border py-2 text-center bg-light" disabled value="1" placeholder="1" />
                <button class="qty-down btn"><i class="fas fa-angle-down"></i></button>
              </div>
            </div>
          </div>
          <!--
          <label for="quexampleFormControlSelect1">Select Quantity</label>
          <select class="form-control" id="quexampleFormControlSelect1">
            <option>1 kg</option>
            <option>2 kg</option>
            <option>3 kg</option>
            <option>4 kg</option>
            <option>5 kg</option>
          </select>
        -->
          <a class="buy_nw" href="#" role="button">Buy Now &nbsp;&nbsp;<span><i class="fas fa-check-double"></i></span></a>
          <a class="buy_nw" id="add_mutton" href="#" role="button">Add To Cart &nbsp;&nbsp;<span><i class="fab fa-opencart"></i></span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Check out Box -->
  
    <div class="m-10 p-2 cart text-center">
      <h3>Cart</h3>
      <div class="overflow-auto">
        <div class="table-responsive">
          <table class="table table-bordered" border="0">
            <tr>
              <th width="40%">Porduct Name</th>
              <th width="10%">Quantity</th>
              <th width="20%">Price Details</th>
              <th width="15%">Order Total</th>
              <th width="5%">Action</th>
              <?php
               if (!empty($_SESSION["cart"])){
               $total =0;
               foreach($_SESSION["cart"] as $key =>$values){ 
               
              ?>
               <tr>
                <td><?php echo $values["item_name"];?></td>
                <td><?php echo $values["item_quantity"];?></td>
                <td><?php echo $values["item_price"];?></td>
                <td><?php echo number_format($values["item_name"] * $values["product_price"],2);?></td>
                <td><a href="process.php?action=delete &id=<?php echo $values['product_id'];?>"> <span class="text-danger">X</span></a></td>
               <tr>
               <?php
                $total = $total + ($values["item_quantity"]* $values["product_price"]);
              } 
              
              ?>
              <tr>
                <td colspan="3"align="right">Total</td>
                <td align="right">₹ <?php echo number_format($total,2);?></td>
              </tr>
              <?php
              }
              ?>
          </table>
        </div>
      </div>
    </div>
    <!-- Bootstrap Cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Fontawesome CDN -->
    <script src="https://kit.fontawesome.com/ec2ebb3023.js" crossorigin="anonymous"></script>
    <!-- Slick JavaScript CDN -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Project -->
    <script src="main.js"></script>
</body>

</html>