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
        $payment = new \App\Solid\OCP\Bad\Payment();
        $paymentResult = $payment->process(new \App\Solid\OCP\Bad\MomoPayment());
        $this->assertStringContainsString(\App\Solid\OCP\Bad\MomoPayment::PAYMENT_NAME, $paymentResult);
    }

    public function test_refactored()
    {
        $payment = new \App\Solid\OCP\Good\Payment();
        $paymentResult = $payment->process(new \App\Solid\OCP\Good\MomoPayment());
        $this->assertStringContainsString(\App\Solid\OCP\Good\MomoPayment::PAYMENT_NAME, $paymentResult);
    }
}
