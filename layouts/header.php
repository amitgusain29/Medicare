<?php

session_start();

// include('../server/connection.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medicare</title>
  <link rel="shortcut icon" href="assets/imgs/favicon.ico">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"/>

  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top">
    <div class="container">
      <h4 class="logo-text">Medicare</h4>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="store.php">Store</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>


          <li class="nav-item">
            <a href="cart.php">
              <i class="fa-solid fa-cart-shopping">
              <?php if(isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) {?>
                          <span class="cart-quantity"> <?php echo $_SESSION['quantity'];  ?> </span>
                    <?php } ?>  
            </i>
          </a>
           <a href="account.php"><i class="fa-solid fa-user"></i></a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html> -->










 