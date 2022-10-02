<?php

namespace Tests\Unit\OCP;

use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_violation()
    {
        $payment = new \App\Solid\OCP_Violation\Payment();
        $paymentResult = $payment->process(new \App\Solid\OCP_Violation\MomoPayment());
        $this->assertStringContainsString(\App\Solid\OCP_Violation\MomoPayment::PAYMENT_NAME, $paymentResult);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_refactored()
    {
        $payment = new \App\Solid\OCP_Refactored\Payment();
        $paymentResult = $payment->process(new \App\Solid\OCP_Refactored\MomoPayment());
        $this->assertStringContainsString(\App\Solid\OCP_Refactored\MomoPayment::PAYMENT_NAME, $paymentResult);
    }
}
