
<?php include('layouts/header.php'); ?>


  <!--Home-->
  <section id="home">
    <div class="containgrer">
      <h5></h5>
      <h1><span>WELCOME</span> TO MEDICARE</h1>
      <p>Order Medicines Online</p>
      <a href="store.php"><button class="buy-btn">Shop now</button></a>
    </div>
  </section>

  <!--Brands-->
  <section id="brand">
    <div class="brand-j">
      <img class="img-fluid" src="assets/imgs/brand1.png" />
      <img class="img-fluid" src="assets/imgs/brand2.png" />
      <img class="img-fluid" src="assets/imgs/brand3.jpg" />
      <img class="img-fluid" src="assets/imgs/brand4.png" />
      <img class="img-fluid" src="assets/imgs/brand5.png" />
      <img class="img-fluid" src="assets/imgs/brand1.png" />
      <img class="img-fluid" src="assets/imgs/brand2.png" />
      <img class="img-fluid" src="assets/imgs/brand3.jpg" />
      <img class="img-fluid" src="assets/imgs/brand4.png" />
      <img class="img-fluid" src="assets/imgs/brand5.png" />
      <img class="img-fluid" src="assets/imgs/brand1.png" />
      <img class="img-fluid" src="assets/imgs/brand2.png" />
      <img class="img-fluid" src="assets/imgs/brand3.jpg" />
      <img class="img-fluid" src="assets/imgs/brand4.png" />
      <img class="img-fluid" src="assets/imgs/brand5.png" />
    </div>
  </section>

  <section id="3-tabs">

  </section>

  <!--New-->
  <section id="new" class="w-100">
    <div class="row p-0 m-0">
      <!--One-->
      <div class="one col-lg-4 col-md-12 col-sm-12">
        <img class="img-fluid" src="assets/imgs/multivitamin5.jpg" />
        <div class="details">
          <h2>HK Vitals Multivitamin</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>
      
      <!--Two-->
      <div class="one col-lg-4 col-md-12 col-sm-12">
        <img class="img-fluid" src="assets/imgs/treatments.jpg">
        <div class="details">
          <h2>Joint Flex Pain Relief</h2>
          <button>Shop Now</button>
        </div>
      </div>

      <!--Three-->
      <div class="one col-lg-4 col-md-12 col-sm-12">
        <img class="img-fluid" src="assets/imgs/volini spray.jpg" />
        <div class="details">
          <h2>Volini Spray</h2>
          <button>Shop Now</button>
        </div>
      </div>
    </div>
  </section>


  <!--Featured-->
  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Our Featured</h3>
      <p>Here you can check our featured products</p>
    </div>
    <div class="row mx-auto container-fluid">


    <?php include('server/get_featured_products.php'); ?>

    <?php while($row= $featured_products->fetch_assoc()){   ?>


      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">₹ <?php echo $row['product_price']; ?></h4>
        <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      </div>
     
    <?php } ?>
    </div>
  </section>

  <!--Banner-->
  <section id="banner" class="my-5 py-5">
    <div class="container">
      <h4></h4>
      <h1><br> UP to 30% OFF</h1>
      <a href="store.php"><button class="text-uppercase">Shop Now</button></a>
    </div>
  </section>

  <!--Personal and Skincare-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Personal care & Health care</h3>
    </div>
    <div class="row mx-auto container-fluid">


    <?php include('server/get_care.php'); ?>

  <?php while($row=$care_products->fetch_assoc()){ ?>
  <div class="product text-center col-lg-3 col-md-4 col-sm-12">
    <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
    <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
    <h4 class="p-price">₹ <?php echo $row['product_price']; ?></h4>
    <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
  </div>
      
  <?php } ?>
    </div>
  </section>

  <!--Mom & Baby-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Mom & Baby Products</h3>
    </div>
    <div class="row mx-auto container-fluid">

    <?php include('server/get_momandbaby.php'); ?>

    <?php while($row=$baby->fetch_assoc()){ ?>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
       <h4 class="p-price">₹ <?php echo $row['product_price']; ?></h4>
       <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      </div>

      <?php } ?>


    </div>
  </section>

  <!--Ayurvedic-->
  <section id="featured" class="my-5">
    <div class="container text-center mt-5 py-5">
      <h3>Ayurvedic Products</h3>
    </div>
    <div class="row mx-auto container-fluid">

    <?php include('server/get_ayurvedic.php'); ?>

    <?php while($row=$ayurvedic->fetch_assoc()){ ?>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
      <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>" />
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
       <h4 class="p-price">₹ <?php echo $row['product_price']; ?></h4>
       <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
      </div>

      <?php } ?>
      
    </div>
  </section>

  

  <?php include('layouts/footer.php'); ?>