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
     * @ORM\ManyToOne(targetEntity="rubros", inversedBy="categorias")
     * @ORM\JoinColumn(name="codigoRubro", referencedColumnName="codigo_rubro")
     */
    protected $rubros;
    
    
    /**
     * @ORM\OneToMany(targetEntity="productos", mappedBy="categorias")
     */
    protected $productos;

    public function __construct() {
        $this->productos = new ArrayCollection();
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
        return $this->categorias->toArray();
    }
    
     public function __toString() {
        return strval($this->codigoCategoria);
    }
}

