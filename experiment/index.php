<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Booking Demo</title>
  <?php
  require('functions.php');
  ob_start();
  ?>
</head>

<body>
  <div class="text-center">
    <h3 class="text-center bg-light text-dark">Hello, world!</h3>&nbsp;
    <small class="text-center  text-light bg-dark">a small Demo</small>
  </div>
  <div class="overflow-auto">
    <div class="alert alert-info" role="alert">
      A simple Demo — Check it out!
    </div>
  </div>
  <div class="overflow-auto">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Client</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Customer</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Book</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active p-2" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form action="client.php" method="POST" accept-charset="utf-8">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Full Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="client_name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Shop</label>
              <input type="text" class="form-control" id="inputPassword4" name="client_shop">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="exampleFormControlInput1">Shop Opens at</label>
              <input type="time" class="form-control" id="exampleFormControlInput1" name="client_shop_open">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleFormControlInput1">Shop Closes at</label>
              <input type="time" class="form-control" id="exampleFormControlInput1" name="client_shop_close">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="client_email">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Services Offered</label>
            <select multiple class="form-control" id="exampleFormControlSelect1" name="client_services">
              <option value="hair_care">Hair Care</option>
              <option value="hair_spa">Hair Spa</option>
              <option value="Hairstyles">Hairstyles</option>
              <option value="massage">Massage</option>
              <option value="cutting">Cutting</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="client_message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="client_submit">Sign Up</button>
        </form>
      </div>
      <div class="tab-pane fade p-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form action="customer.php" method="get" accept-charset="utf-8">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Full Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="customer_name">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="customer_email">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Service Preferred</label>
            <select multiple class="form-control" id="exampleFormControlSelect2" name="customer_service">
              <option value="1">Hair Care</option>
              <option value="2">Hair Spa</option>
              <option value="3">Hairstyles</option>
              <option value="4">Massage</option>
              <option value="5">Cutting</option>
            </select>
          </div>
          <div class="overflow-auto time"></div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="customer_message"></textarea>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="book">Book</button>
        </form>
      </div>
      <div class="tab-pane p-3 fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <?php 
        $clients=$data->get_data();
        foreach($clients as $item){
        ?>
        <div class="card  " style="width: 18rem;">
          <img src="images.png" class="card-img-top" alt="Clients_profile — Image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $item['shop_name'] ?></h5>
            <p class="card-text"><?php echo $item['shop_description'] ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $item['serviceA'] ?></li>
            <li class="list-group-item"><?php echo $item['serviceB'] ?></li>
            <li class="list-group-item"><?php echo $item['serviceC'] ?></li>
          </ul>
          <div class="card-body">
            <a href="" class="card-link">Book Your Slot</a>
            <a href="#" class="card-link"></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js" charset="utf-8">
  </script>
</body>

</html>