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
define('STRIPE_API_KEY', 'sk_test_51KXNZpLzOmJMllI2CPAiYZ72tbcWVefgf82pbHkv6vVfme9i6jbgZCXqV2iaBLlCStlY4gDAxQ9r1jSuuV5kLUvn00OjDUsGHU'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51KXNZpLzOmJMllI2X5FpgsBhVqiQrTcSL6RI5JKJ4BlfnUVEkSpEgsLRBcnwDX8KPYnBlsFsITq4rTqMOyU7uCIC002sapuxvL'); 
define('STRIPE_SUCCESS_URL', 'http://localhost/Payment/payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://localhost/Payment/payment-cancel.php'); //Payment cancel URL 
    
// Database configuration    
define('DB_HOST', 'locahost');   
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '');   
define('DB_NAME', 'onlinepayment'); 
 
?>