<?php

namespace App\StrategyPattern\PaymentMethods;

class ApplePayStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return "apple pay";
    }
}