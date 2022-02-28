<?php 
 
// Product Details  
// Minimum amount is $0.50 US  
$productName = "Codex Demo Product";  
$productID = "DP12345";  
$productPrice = 55; 
$currency = "usd"; 
  
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', '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'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_live_51KXNZpLzOmJMllI2wJ71CNzyVKw959V0q1ZZZGNRnibtvVVmwzzQ6RfAMUpBB44hQ430ldLyHpQgDkezKSL3YY5800sVKb9atj'); 
define('STRIPE_SUCCESS_URL', 'http://localhost/site/payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://localhost/site/payment-cancel.php'); //Payment cancel URL 
    
// Database configuration    
define('DB_HOST', 'locahost');   
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '');   
define('DB_NAME', 'onlinepayment'); 
 
?>