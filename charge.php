<?php

require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey("sk_test_a0XKiKsbO9s74BKFVm3iBsHn00UCGjMgcB");



$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$name = $POST["fullname"];
$email = $POST["email"];
$token = $POST["stripeToken"];

$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token,
    "description" => "Bought Course",

));

$charge = \Stripe\Charge::create(array(
    "amount" => 5500,
    "currency" => "usd",
    "description" => "Intro to react course",
    "customer" => $customer->id
));

$db = new mysqli("localhost","root","","Payments");
$sql = "select * from customers";
$customers = $db->query($sql);
while($customer = $customers->fetch_assoc()) { 
    
    echo ("Customer Info: ... ");
    echo($customer);

}

print_r($charge);


echo "thanks for submitting $name , we'll send you a confirmation email at $email";



?>

