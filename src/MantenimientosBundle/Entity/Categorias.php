<?php

namespace MantenimientosBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Categorias
 */
class Categorias
{
    
    /**
     * @var \MantenimientosBundle\Entity\Rubros
     */
    protected $rubros;
    
    /**
     * @var \MantenimientosBundle\Entity\Productos
     */
    protected $productos;

    public function __construct() {
        $this->productos = new ArrayCollection();
       // $this->rubros   = new ArrayCollection();
       //$this->categorias =new ArrayCollection();
        
    }
   
    /**
     * Get Productos
     *
     * @return \MantenimientosBundle\Entity\Productos
     */
    public function getProductos(){
        return $this->productos;//;->toArray();
               
    }
    
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
    
    
    /**
     * @return array
     */
    public function getCategorias()
    {
        return $this->categorias;//->toArray();
    }
    
     public function __toString() {
        return strval($this->codigoCategoria);
    }
    
    /**
     * Get rubros
     *
     * @return \MantenimientosBundle\Entity\Rubros 
     */
    public function getRubros() {
        return $this->rubros;
    }
    
    /**
     * Set rubros
     *
     * @param \MantenimientosBundle\Entity\Rubros $rubros
     *
     * @return rubros
     */
    public function setRubros(\MantenimientosBundle\Entity\Rubros $rubros = null)
    {
        $this->rubros = $rubros;

        return $this;
    }
      
}
