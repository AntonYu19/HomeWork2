<?php

trait TraitGPS
{
    private $Gps = 15;

    public function getPriceGps($Min)
    {
        return (ceil($Min / 60) * $this->Gps);
    }
}