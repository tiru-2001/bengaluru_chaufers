<?php 
require('./assets/vendor/autoload.php');

use Razorpay\Api\Api;

$api = new Api("rzp_live_yxuBa3QpFAHrFL","FdA8TeXehgtMnncRNtw1vRgj");

$order=$api->order->create(array(
    'amount'=>$_GET['amount'],
    'currency'=>'INR'
));

echo $order['id'];
?>