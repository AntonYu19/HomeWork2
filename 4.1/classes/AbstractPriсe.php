<?php

require_once 'InterfaceCalc.php';
require_once 'TraitGPS.php';

abstract class AbstractPriсe implements InterfaceCalc
{
    use TraitGPS;

    protected $KM;
    protected $Min;
    protected $GPS = false; // Если true, то 15 руб за минуту

    public function __construct($priceKM, $priceMin, $GPS = false)
    {
        $this->KM = $priceKM;
        $this->Min = $priceMin;
        $this->Gps = $GPS;

     }
    public function calculate($KM, $Min)
    {
        $costTotal = ceil($KM * $this->KM + $Min * $this->Min);

        if ($this->Gps) {
            $costTotal += $this->getPriceGps($Min);
        }
        return $costTotal;
    }
}