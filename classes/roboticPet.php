<?php

class RoboticPet extends Pet
{
    private $_accessories = [];

    public function __construct($_animal="unknown", $_color="unknown", $_accessories = [])
    {
        parent::__construct($_animal,$_color);

        $this->_accessories = $_accessories;
    }

    // method to add a new accessory
    public function addAccessory($accessory): void
    {
        $this->_accessories[] = $accessory;
        echo "Added $accessory to accessories.\n";
    }

    // method to list all accessories
    public function listAccessories(): void
    {
        if (empty($this->_accessories)) {
            echo "No accessories available.\n";
        } else {
            echo "Accessories: " . implode(", ", $this->_accessories) . "\n";
        }
    }
}
