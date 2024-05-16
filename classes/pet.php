<?php

class Pet
{
    private $_animal;
    private $_color;

    /**
     * @param $_animal
     * @param $_color
     */
    public function __construct($_animal, $_color)
    {
        $this->_animal = $_animal;
        $this->_color = $_color;
    }

    /**
     * @return mixed
     */
    public function getAnimal()
    {
        return $this->_animal;
    }

    /**
     * @param mixed $animal
     */
    public function setAnimal($animal): void
    {
        $this->_animal = $animal;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->_color = $color;
    }

}