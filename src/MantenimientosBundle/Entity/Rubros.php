<?php

namespace MantenimientosBundle\Entity;

/**
 * Rubros
 */
class Rubros
{
    
    /**
     * @var int
     */
    private $codigoRubro;

    /**
     * @var string
     */
    private $nombreRubro;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigoRubro
     *
     * @param integer $codigoRubro
     *
     * @return Rubros
     */
    public function setCodigoRubro($codigoRubro)
    {
        $this->codigoRubro = $codigoRubro;

        return $this;
    }

    /**
     * Get codigoRubro
     *
     * @return int
     */
    public function getCodigoRubro()
    {
        return $this->codigoRubro;
    }

    /**
     * Set nombreRubro
     *
     * @param string $nombreRubro
     *
     * @return Rubros
     */
    public function setNombreRubro($nombreRubro)
    {
        $this->nombreRubro = $nombreRubro;

        return $this;
    }

    /**
     * Get nombreRubro
     *
     * @return string
     */
    public function getNombreRubro()
    {
        return $this->nombreRubro;
    }
}

