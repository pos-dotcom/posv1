<?php

namespace ComprasBundle\Entity;

/**
 * Compras_Det
 */
class Compras_Det
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
     * @var boolean
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
     * @return Compras_Det
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
     * @return Compras_Det
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
     * @return Compras_Det
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
     * @return Compras_Det
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
     * @return Compras_Det
     */
    public function setBDocena($bDocena)
    {
        $this->bDocena = $bDocena;

        return $this;
    }

    /**
     * Get bDocena
     *
     * @return boolean
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
     * @return Compras_Det
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
     * Set codigoComprasEnc
     *
     * @param integer $codigoComprasEnc
     *
     * @return Compras_Det
     */
    public function setCodigoCompraEnc($codigoCompraEnc)
    {
        $this->codigoCompraEnc = $codigoCompraEnc;

        return $this;
    }

    /**
     * Get codigoComprasEnc
     *
     * @return int
     */
    public function getCodigoCompraEnc()
    {
        return $this->codigoCompraEnc;
    }
}

