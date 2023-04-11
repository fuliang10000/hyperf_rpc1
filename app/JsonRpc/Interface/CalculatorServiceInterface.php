<?php


namespace App\JsonRpc\Interface;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
}