<?php

class StuffedPet extends Pet
{
    private $_size;
    private $stuffingType;
    private $_material;

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->_size = $size;
    }

    /**
     * @return mixed
     */
    public function getStuffingType()
    {
        return $this->stuffingType;
    }

    /**
     * @param mixed $stuffingType
     */
    public function setStuffingType($stuffingType): void
    {
        $this->stuffingType = $stuffingType;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->_material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material): void
    {
        $this->_material = $material;
    }

}