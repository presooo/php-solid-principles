<?php

/**
 * In our code where ever we've used Car, we can't substitute it directly with ElectricCar because fuel() will throw Exception.
 */
class ElectricCar extends Car
{
    public function fuel()
    {
        throw new IllegalStateException("Not Supported");
    }

    public function start(): void
    {
        // TBC
    }
}
