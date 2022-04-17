<?php

require_once 'TraitDriver.php';

class PriceHourly extends AbstractPriсe
{
    use TraitDriver;

    public function __construct($Gps = false, $isDriver = true)
    {
        parent::__construct(0, 200, $Gps);
        $this->isDriver = $isDriver;
    }

    public function calculate($KM, $Min)
    {
        $arrayTime = explode(':', $Min);
        $hours = $arrayTime[0];
        $minutes = $arrayTime[1];

        $timeMin = $hours * 60 + $minutes;
        $totalHour = ceil(($timeMin) / 60) * $this->Min;

        if ($this->GPS) {
            $totalHour += $this->getPriceGps($timeMin);
        }

        if ($this->isDriver) {
            $totalHour += $this->priceDriver;
        }

        return $totalHour;
    }
}
