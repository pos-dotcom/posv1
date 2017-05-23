<?php

namespace MantenimientosBundle\Entity;





/**
 * Categorias
 */
class Categorias
{
    
    /**
     * @var int
     */
    private $codigoCategoria;

    /**
     * @var string
     */
    private $nombreCategoria;
    
    /**
     * @var int

     */
    private $codigoRubro;


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
     * Set codigoCategoria
     *
     * @param integer $codigoCategoria
     *
     * @return Categorias
     */
    public function setCodigoCategoria($codigoCategoria)
    {
        $this->codigoCategoria = $codigoCategoria;

        return $this;
    }

    /**
     * Get codigoCategoria
     *
     * @return int
     */
    public function getCodigoCategoria()
    {
        return $this->codigoCategoria;
    }

    /**
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     *
     * @return Categorias
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }
    
    
    
    /**
     * Set codigoRubro
     *
     * @param integer $codigoRubro
     *
     * @return Categorias
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
}

