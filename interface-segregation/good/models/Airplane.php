<?php

class Airplane implements Vehicle, Flyable
{

    public function accelerate()
    {
        echo 'Accelerating!';
    }

    public function brake()
    {
        echo 'Braking!';
    }

    public function fly()
    {
        echo 'Flying an airplane!';
    }
}
