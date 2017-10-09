<?php

namespace ComprasBundle\Entity;

/**
 * ComprasDet
 */
class ComprasDet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoCompraDet;

    /**
     * @var int
     */
    private $codigoCompraEnc;

    
    /**
     * @var int
     */
    private $codigoProducto;

    /**
     * @var int
     */
    private $cantidad;

    /**
     * @var int
     */
    private $bDocena;

    /**
     * @var string
     */
    private $costo;
    
    private $producto;


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
     * Set codigoComprasDet
     *
     * @param integer $codigoComprasDet
     *
     * @return ComprasDet
     */
    public function setCodigoCompraDet($codigoCompraDet)
    {
        $this->codigoCompraDet = $codigoCompraDet;

        return $this;
    }

    /**
     * Get codigoComprasDet
     *
     * @return int
     */
    public function getCodigoCompraDet()
    {
        return $this->codigoCompraDet;
    }

    /**
     * Set codigoCompraEnc
     *
     * @param integer $codigoCompraEnc
     *
     * @return ComprasDet
     */
    public function setCodigoCompraEnc($codigoCompraEnc)
    {
        $this->codigoCompraEnc = $codigoCompraEnc;

        return $this;
    }

    /**
     * Get codigoCompraEnc
     *
     * @return int
     */
    public function getCodigoCompraEnc()
    {
        return $this->codigoCompraEnc;
    }


    /**
     * Set codigoProducto
     *
     * @param integer $codigoProducto
     *
     * @return ComprasDet
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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return ComprasDet
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set bDocena
     *
     * @param integer $bDocena
     *
     * @return ComprasDet
     */
    public function setBDocena($bDocena)
    {
        $this->bDocena = $bDocena;

        return $this;
    }

    /**
     * Get bDocena
     *
     * @return int
     */
    public function getBDocena()
    {
        return $this->bDocena;
    }

    /**
     * Set costo
     *
     * @param string $costo
     *
     * @return ComprasDet
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string
     */
    public function getCosto()
    {
        return $this->costo;
    }
    
    /*
     * Get Producto
     * 
     * return \Mantenimientos\Entity\Productos
     */
    
    public function getProducto()
    {
        
      return $this->producto;  
        
    }
    
    /*
     * set Producto
     * 
     * @param \Mantenimientos\Entity\Productos
     * return Producto
     * 
     */
    public function setProducto(\MantenimientosBundle\Entity\Productos $productos=null)
    {    
        $this->producto=$productos;
        return $this;
    
    }
    
    public function __construct() {
        
    }
}

