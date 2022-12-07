<?php

namespace App\StrategyPattern\PaymentMethods;

class GooglePayStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return "google pay";
    }
}