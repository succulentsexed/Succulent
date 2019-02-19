<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_live_VRXG8rfaFKLhVeow49rN6CNO');

$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];


try {
    $charge = \Stripe\Charge::create(array(
      "amount" => 1000,
      "currency" => "usd",
      "source" => $token,
      "description" => $email)
    );

    print_r($charge);
}catch(\Stripe\Error\Card $e){
    echo $e->getMessage();
}
?>