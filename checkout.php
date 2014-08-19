<?php

// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account
Stripe::setApiKey("sk_test_uPfVeRT1Ig8s7Drb0eKckCGu");

?>


<!doctype html>
<html lang="en">
<head>
<title>Checkout</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
    <div class="page-header">
        <h1><font color="blue">Payment System</font></h1>
    </div
</div>
<div class="row"></div>
<div class="row">
    <div class="col-xs-6 col-md-4"></div>
    <div class="col-xs-6 col-md-4">
<form action="" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="sk_test_uPfVeRT1Ig8s7Drb0eKckCGu"
    data-amount="2000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="/128x128.png">
  </script>
</form>
</div>
<div class="col-xs-6 col-md-4"></div>
</body>
</html>