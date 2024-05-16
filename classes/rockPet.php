<?php

class RockPet extends Pet
{
    private $_accessories;

    /**
     * @return mixed
     */
    public function getAccessories()
    {
        return $this->_accessories;
    }

    /**
     * @param mixed $accessories
     */
    public function setAccessories($accessories)
    {
        $this->_accessories = $accessories;
    }

}