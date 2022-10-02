<?php

namespace App\Solid\OCP_Violation;

class Payment
{
    public function process($payment): string | \Exception
    {
        $result = "";
        if($payment instanceof MomoPayment){
            $result = $payment->pay();
        }elseif($payment instanceof VNPayPayment){
            $result = $payment->pay();
        }elseif($payment instanceof PaypalPayment){
            $result = $payment->pay();
        }else{
            throw new \Exception("Invalid payment method");
        }
        return $result;
    }
}
