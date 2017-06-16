<?php

namespace ComprasBundle\Entity;
namespace MantenimientosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * ComprasEnc
 */
class ComprasEnc
{
    /**
     * @ORM\ManyToOne(targetEntity="proveedor", inversedBy="ComprasEnc")
     * @ORM\JoinColumn(name="codigoProveedor", referencedColumnName="codigo_proveedor")
     */
    
    protected $codigoProveedor;
    
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
     * @return array
     */
    public function getCompras()
    {
        return $this->ComprasEnc->toArray();
    }
    
      public function __toString() {
        return strval($this->codigoProveedor);
        
    }
    
    
}

