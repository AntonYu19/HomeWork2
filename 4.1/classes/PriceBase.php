<?php

require_once 'AbstractPriсe.php';


class PriceBase extends AbstractPriсe
{
    public function __construct($Gps = false)
    {
        parent::__construct(10, 3, $Gps);
    }
}
