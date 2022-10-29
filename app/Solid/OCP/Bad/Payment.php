<?php

namespace App\Solid\OCP\Bad;

class Payment
{
    public function payNow($paymentName)
    {
        if($paymentName == MomoPayment::PAYMENT_NAME){
            (new MomoPayment())->pay();
        }elseif($paymentName == VNPayPayment::PAYMENT_NAME){
            (new VNPayPayment())->pay();
        }elseif($paymentName == PaypalPayment::PAYMENT_NAME){
            (new PaypalPayment())->pay();
        }else{
            throw new \Exception("Invalid payment method");
        }
    }
}
