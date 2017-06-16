<?php

namespace ComprasBundle\Entity;

/**
 * ComprasDet
 */
class ComprasDet
{
    
     /**
     * @ORM\ManyToOne(targetEntity="productos", inversedBy="ComprasDet")
     * @ORM\JoinColumn(name="codigoProducto", referencedColumnName="codigo_producto")
     */
    
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoCompraDet;

    /**
     * @var string
     */
    private $numFactura;

    /**
     * @var int
     */
    private $codigoProducto;

    /**
     * @var int
     */
    private $cantidad;

    /**
     *  @var bool
     */
    private $bDocena;

    /**
     * @var string
     */
    private $costo;

    /**
     * @var int
     */
    private $codigoCompraEnc;


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
     * Set codigoCompraDet
     *
     * @param integer $codigoCompraDet
     *
     * @return ComprasDet
     */
    public function setCodigoCompraDet($codigoCompraDet)
    {
        $this->codigoCompraDet = $codigoCompraDet;

        return $this;
    }

    /**
     * Get codigoCompraDet
     *
     * @return int
     */
    public function getCodigoCompraDet()
    {
        return $this->codigoCompraDet;
    }

    /**
     * Set numFactura
     *
     * @param string $numFactura
     *
     * @return ComprasDet
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
     * @param boolean $bDocena
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
     * @return bool
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
     * @return array
     */
    public function getComprasDet()
    {
        return $this->comprasDet->toArray();
    }
}

