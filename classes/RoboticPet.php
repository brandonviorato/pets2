<?php

class RoboticPet extends pet {
    private $_accessories = [];

    public function __construct($_animal="unknown",$_color="unknown",$_accessories)
    {
        parent::__construct($_animal,$_color);

        $this->_accessories = $_accessories;
    }
}
