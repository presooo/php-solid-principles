<?php

class Car implements VehicleInterface
{

    public function accelerate()
    {
        echo 'Accelerating!';
    }

    public function brake()
    {
        echo 'Braking!';
    }

    /**
     * This would never have a proper implementation
     */
    public function fly()
    {
        throw new Exception('Not implemented method');
    }
}
