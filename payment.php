
<?php include('layouts/header.php'); ?>

<?php

include('server/connection.php');

if(isset($_POST['order_pay_btn']) ){
    $order_status = $_POST['order_status'];
    $order_total_price = $_POST['order_total_price'];
}




?>


<!--Payment-->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Payment</h2>
        <hr class="mx-auto">
    </div>
     <div class="mx-auto container text-center">


    <?php if(isset($_POST['order_status']) && $_POST['order_status'] == "not paid"){ ?>
          <?php $amount = strval($_POST['order_total_price']); ?>
         <?php $order_id = $_POST['order_id']; ?>  
          <p>Total payment: $<?php echo $_POST['order_total_price']; ?></p>
                 <!--   <input class="btn btn-primary" type="submit" value="Pay Now"/> --> 
                 <!-- Set up a container element for the button -->
                 <div id="paypal-button-container"></div>
  

    <?php } else if(isset($_SESSION['total']) && $_SESSION['total'] != 0){?>
      <?php $amount = strval($_SESSION['total']); ?>
     <?php $order_id = $_SESSION['order_id']; ?> 
        <p>Total payment: ₹<?php echo $_SESSION['total']; ?> </p>

        <!-- <input class="btn btn-primary" type="submit" value="Pay Now"/> -->
         <!-- Set up a container element for the button -->
        <div id="paypal-button-container"></div> 


        

            <?php } else { ?>
                         <p>You dont't have an order</p>
            <?php } ?>
        

        
    </div>
  </section>



 

    <!-- Include the PayPal JavaScript SDK; replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=AQaOztdS-mAH5rwz_2hj4B_r1U7Yra7T6exmEmINveXoZTYikPXiFOHKRuJXn6EFRuhAsjTYz5BEpNZQ&currency=USD"></script>


<script>
  paypal.Buttons({

    // Sets up the transaction when a payment button is clicked
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $amount; ?>' 
          }
        }]
      });
    },

    // Finalize the transaction after payer approval
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(orderData) {
        // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            var transaction = orderData.purchase_units[0].payments.captures[0];
            alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

          window.location.href = "server/complete_payment.php?transaction_id="+transaction.id+"&order_id="+<?php echo $order_id;?>;
        
      });
    }
  }).render('#paypal-button-container');

</script>



  
  <?php include('layouts/footer.php'); ?>
