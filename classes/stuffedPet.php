<?php

class StuffedPet extends Pet
{
    private $_size;
    private $_stuffingType;
    private $_material;

    public function __construct($animal="unknown", $color="unknown", $size="", $stuffingType="", $material="")
    {
        // Pass animal and color to Pet constructor
        parent::__construct($animal, $color);

        // Set StuffedPet fields
        $this->_size = $size;
        $this->_stuffingType = $stuffingType;
        $this->_material = $material;
    }

    // method to describe the stuffed pet
    public function describe()
    {
        echo "This is a " . $this->_size . " " . $this->getColor() . " stuffed " . $this->getAnimal() . " made of " . $this->_material . " with " . $this->_stuffingType . " stuffing.\n";
    }
}
