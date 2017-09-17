<?php

namespace MantenimientosBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Productos
 */
class Productos
{
    
    private $categorias;
    
    private $comprasDet;

    public function __construct() {
      //  $this->comprasDet = new ArrayCollection();
      //  $this->categorias = new ArrayCollection();  
    }
    
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoProducto;

    /**
     * @var string
     */
    private $codigoArticulo;

    /**
     * @var int
     */
    private $codigoCategoria;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $precioCosto;

    /**
     * @var string
     */
    private $precioVenta;


    /**
     * @var string
     */
    private $ganancia;

    /**
     * @var int
     */
    private $existencia;

    /**
     * @var int
     */
    private $existenciaPrevia;

    /**
     * @var string
     */
    private $docena;

    /**
     * @var int
     */
    private $bPrecioDocena;

    /**
     * @var string
     */
    private $bActivo;


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
     * Set codigoProducto
     *
     * @param integer $codigoProducto
     *
     * @return Productos
     */
    public function setCodigoProducto($codigoProducto)
    {
        $this->codigoProducto = $codigoProducto;

        return $this;
    }

    /**
     * Get codigoProducto
     *
     * @return int
     */
    public function getCodigoProducto()
    {
        return $this->codigoProducto;
    }

    /**
     * Set codigoArticulo
     *
     * @param string $codigoArticulo
     *
     * @return Productos
     */
    public function setCodigoArticulo($codigoArticulo)
    {
        $this->codigoArticulo = $codigoArticulo;

        return $this;
    }

    /**
     * Get codigoArticulo
     *
     * @return string
     */
    public function getCodigoArticulo()
    {
        return $this->codigoArticulo;
    }

    /**
     * Set codigoCategoria
     *
     * @param integer $codigoCategoria
     *
     * @return Productos
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Productos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set precioCosto
     *
     * @param string $precioCosto
     *
     * @return Productos
     */
    public function setPrecioCosto($precioCosto)
    {
        $this->precioCosto = $precioCosto;

        return $this;
    }

    /**
     * Get precioCosto
     *
     * @return string
     */
    public function getPrecioCosto()
    {
        return $this->precioCosto;
    }

    /**
     * Set precioVenta
     *
     * @param string $precioVenta
     *
     * @return Productos
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;

        return $this;
    }

    /**
     * Get precioVenta
     *
     * @return string
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    /**
     * Set ganancia
     *
     * @param string $ganancia
     *
     * @return Productos
     */
    public function setGanancia($ganancia)
    {
        $this->ganancia = $ganancia;

        return $this;
    }

    /**
     * Get ganancia
     *
     * @return string
     */
    public function getGanancia()
    {
        return $this->ganancia;
    }

    /**
     * Set existencia
     *
     * @param integer $existencia
     *
     * @return Productos
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }

    /**
     * Get existencia
     *
     * @return int
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set existenciaPrevia
     *
     * @param integer $existenciaPrevia
     *
     * @return Productos
     */
    public function setExistenciaPrevia($existenciaPrevia)
    {
        $this->existenciaPrevia = $existenciaPrevia;

        return $this;
    }

    /**
     * Get existenciaPrevia
     *
     * @return int
     */
    public function getExistenciaPrevia()
    {
        return $this->existenciaPrevia;
    }

    /**
     * Set docena
     *
     * @param string $docena
     *
     * @return Productos
     */
    public function setDocena($docena)
    {
        $this->docena = $docena;

        return $this;
    }

    /**
     * Get docena
     *
     * @return string
     */
    public function getDocena()
    {
        return $this->docena;
    }

    /**
     * Set bPrecioDocena
     *
     * @param integer $bPrecioDocena
     *
     * @return Productos
     */
    public function setBPrecioDocena($bPrecioDocena)
    {
        $this->bPrecioDocena = $bPrecioDocena;

        return $this;
    }

    /**
     * Get bPrecioDocena
     *
     * @return int
     */
    public function getBPrecioDocena()
    {
        return $this->bPrecioDocena;
    }

    /**
     * Set bActivo
     *
     * @param string $bActivo
     *
     * @return Productos
     */
    public function setBActivo($bActivo)
    {
        $this->bActivo = $bActivo;

        return $this;
    }

    /**
     * Get bActivo
     *
     * @return string
     */
    public function getBActivo()
    {
        return $this->bActivo;
    }
    
    /**
     * @return array
     */
    public function getProductos()
    {
        return $this->productos->toArray();
    }
    
      public function __toString() {
        return strval($this->codigoProducto);
    }
    
    /**
     * Get Categorias
     *
     * @return \MantenimientosBundle\Entity\Categorias 
     */
   public function getCategorias()
    {
        return $this->categorias;//->toArray();
    }
   
    /**
     * Set categorias
     *
     * @param \MantenimientosBundle\Entity\Categorias $categorias
     *
     * @return categorias
     */
    public function setCategorias(\MantenimientosBundle\Entity\Categorias $categorias = null)
    {
        $this->categorias= $categorias;
        return $this;
    }
    
    /**
     * Get comprasDet
     *
     * @return \ComprasBundle\Entity\ComprasDet
     */
    
    
    public function getComprasDet(){
        return $this->$comprasDet;//;->toArray();
               
    }
    
    
    
    
    
}
