<?php

namespace App\StrategyPattern\PaymentMethods;

class CreditCardStrategy implements PaymentMethod
{
    public function pay(): string
    {
        return "credit card";
    }
}