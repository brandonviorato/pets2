<?php

class Pet
{
    private $_animal;
    private $_color;

    public function __construct($_animal="", $_color="")
    {
        $this->_animal = $_animal;
        $this->_color = $_color;
    }

    public function getAnimal(): mixed
    {
        return $this->_animal;
    }

    public function getColor(): mixed
    {
        return $this->_color;
    }

}
