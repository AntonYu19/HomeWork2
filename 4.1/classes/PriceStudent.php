<?php

require_once 'AbstractPriсe.php';

class PriceStudent extends AbstractPriсe
{
    public function __construct($Gps = false)
    {

        parent::__construct(4, 1, $Gps);
    }
}
