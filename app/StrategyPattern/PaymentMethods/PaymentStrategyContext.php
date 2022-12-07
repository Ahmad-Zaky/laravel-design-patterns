<?php

namespace App\StrategyPattern\PaymentMethods;

class PaymentStrategyContext
{
    
    private PaymentMethod $strategy;

    private array $paymentMethods = [
        "credit",
        "apple",
        "google",
    ];

    public function __construct(string $paymentMethod) 
    {
        $this->strategy = match ($paymentMethod) {
            "credit" => new CreditCardStrategy,
            "apple" => new ApplePayStrategy,
            "google" => new GooglePayStrategy,
            default => throw new \InvalidArgumentException("You must provide, one of these payment methods (". implode(', ',$this->paymentMethods) .")."),
        };
    }

    public function pay(): string
    {
        return $this->strategy->pay();
    }
}