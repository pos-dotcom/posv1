<?php

namespace VentasBundle\Entity;

/**
 * VentasDet
 */
class VentasDet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoVentaDet;

    /**
     * @var int
     */
    private $codigoVentaEnc;

    /**
     * @var string
     */
    private $numFactura;

    /**
     * @var \DateTime
     */
    private $fechaVenta;

    /**
     * @var int
     */
    private $codigoProducto;

    /**
     * @var int
     */
    private $cantidad;

    /**
     * @var string
     */
    private $monto;

    /**
     * @var string
     */
    private $ganancia;

    /**
     * @var int
     */
    private $codigoCategoria;

    /**
     * @var string
     */
    private $precioVenta;

    /**
     * @var string
     */
    private $descuento;

    /**
     * @var string
     */
    private $precioFacturado;

    /**
     * @var int
     */
    private $codigoAgencia;


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
     * Set codigoVentaDet
     *
     * @param integer $codigoVentaDet
     *
     * @return VentasDet
     */
    public function setCodigoVentaDet($codigoVentaDet)
    {
        $this->codigoVentaDet = $codigoVentaDet;

        return $this;
    }

    /**
     * Get codigoVentaDet
     *
     * @return int
     */
    public function getCodigoVentaDet()
    {
        return $this->codigoVentaDet;
    }

    /**
     * Set codigoVentaEnc
     *
     * @param integer $codigoVentaEnc
     *
     * @return VentasDet
     */
    public function setCodigoVentaEnc($codigoVentaEnc)
    {
        $this->codigoVentaEnc = $codigoVentaEnc;

        return $this;
    }

    /**
     * Get codigoVentaEnc
     *
     * @return int
     */
    public function getCodigoVentaEnc()
    {
        return $this->codigoVentaEnc;
    }

    /**
     * Set numFactura
     *
     * @param string $numFactura
     *
     * @return VentasDet
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
     * Set fechaVenta
     *
     * @param \DateTime $fechaVenta
     *
     * @return VentasDet
     */
    public function setFechaVenta($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;

        return $this;
    }

    /**
     * Get fechaVenta
     *
     * @return \DateTime
     */
    public function getFechaVenta()
    {
        return $this->fechaVenta;
    }

    /**
     * Set codigoProducto
     *
     * @param integer $codigoProducto
     *
     * @return VentasDet
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
     * @return VentasDet
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
     * Set monto
     *
     * @param string $monto
     *
     * @return VentasDet
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set ganancia
     *
     * @param string $ganancia
     *
     * @return VentasDet
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
     * Set codigoCategoria
     *
     * @param integer $codigoCategoria
     *
     * @return VentasDet
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
     * Set precioVenta
     *
     * @param string $precioVenta
     *
     * @return VentasDet
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
     * Set descuento
     *
     * @param string $descuento
     *
     * @return VentasDet
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set precioFacturado
     *
     * @param string $precioFacturado
     *
     * @return VentasDet
     */
    public function setPrecioFacturado($precioFacturado)
    {
        $this->precioFacturado = $precioFacturado;

        return $this;
    }

    /**
     * Get precioFacturado
     *
     * @return string
     */
    public function getPrecioFacturado()
    {
        return $this->precioFacturado;
    }

    /**
     * Set codigoAgencia
     *
     * @param integer $codigoAgencia
     *
     * @return VentasDet
     */
    public function setCodigoAgencia($codigoAgencia)
    {
        $this->codigoAgencia = $codigoAgencia;

        return $this;
    }

    /**
     * Get codigoAgencia
     *
     * @return int
     */
    public function getCodigoAgencia()
    {
        return $this->codigoAgencia;
    }
}

