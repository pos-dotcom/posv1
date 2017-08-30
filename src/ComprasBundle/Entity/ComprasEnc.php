<?php

namespace ComprasBundle\Entity;

/**
 * ComprasEnc
 */
class ComprasEnc
{
    
    
     /**
     * @var \MantenimientosBundle\Entity\Proveedor
     */
    protected $proveedor;
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoCompraEnc;

    /**
     * @var string
     */
    private $numFactura;

    /**
     * @var \DateTime
     */
    private $fechaCompra;

    /**
     * @var int
     */
    private $codigoProveedor;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var string
     */
    private $total;
    
    
    


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
     * Set codigoCompraEnc
     *
     * @param integer $codigoCompraEnc
     *
     * @return ComprasEnc
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
     * Set numFactura
     *
     * @param string $numFactura
     *
     * @return ComprasEnc
     */
    public function setNumFactura($numFactura)
    {
        $this->numFactura = $numFactura;

        return $this;
    }

    /**
     * Get numFactura
     *
     * @return string
     */
    public function getNumFactura()
    {
        return $this->numFactura;
    }

    /**
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     *
     * @return ComprasEnc
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set codigoProveedor
     *
     * @param integer $codigoProveedor
     *
     * @return ComprasEnc
     */
    public function setCodigoProveedor($codigoProveedor)
    {
        $this->codigoProveedor = $codigoProveedor;

        return $this;
    }

    /**
     * Get codigoProveedor
     *
     * @return int
     */
    public function getCodigoProveedor()
    {
        return $this->codigoProveedor;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return ComprasEnc
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return ComprasEnc
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
    
    
    
     /**
     * Get proveedor
     *
     * @return \MantenimientosBundle\Entity\Proveedor 
     */
    public function getProveedor() {
        return $this->proveedor;
    }
    
    /**
     * Set proveedor
     *
     * @param \MantenimientosBundle\Entity\Proveedor $proveedor
     *
     * @return proveedor
     */
    public function setProveedor(\MantenimientosBundle\Entity\Proveedor $proveedor = null)
    {
        $this->proveedor = $proveedor;

        return $this;
    }
    
}

