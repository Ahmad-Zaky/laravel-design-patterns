<?php

namespace App\StrategyPattern\PaymentMethods;

interface PaymentMethod
{
    public function pay(): string;
}