<?php

namespace VentasBundle\Entity;

/**
 * VentasEnc
 */
class VentasEnc
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoVentaEnc;

    /**
     * @var string
     */
    private $numFactura;

    /**
     * @var int
     */
    private $codigoEmpleado;

    /**
     * @var \DateTime
     */
    private $fechaVenta;

    /**
     * @var string
     */
    private $tipoVenta;

    /**
     * @var string
     */
    private $montoTotal;

    /**
     * @var string
     */
    private $gananciaTotal;

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
     * Set codigoVentaEnc
     *
     * @param integer $codigoVentaEnc
     *
     * @return VentasEnc
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
     * @return VentasEnc
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
     * Set codigoEmpleado
     *
     * @param integer $codigoEmpleado
     *
     * @return VentasEnc
     */
    public function setCodigoEmpleado($codigoEmpleado)
    {
        $this->codigoEmpleado = $codigoEmpleado;

        return $this;
    }

    /**
     * Get codigoEmpleado
     *
     * @return int
     */
    public function getCodigoEmpleado()
    {
        return $this->codigoEmpleado;
    }

    /**
     * Set fechaVenta
     *
     * @param \DateTime $fechaVenta
     *
     * @return VentasEnc
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
     * Set tipoVenta
     *
     * @param string $tipoVenta
     *
     * @return VentasEnc
     */
    public function setTipoVenta($tipoVenta)
    {
        $this->tipoVenta = $tipoVenta;

        return $this;
    }

    /**
     * Get tipoVenta
     *
     * @return string
     */
    public function getTipoVenta()
    {
        return $this->tipoVenta;
    }

    /**
     * Set montoTotal
     *
     * @param string $montoTotal
     *
     * @return VentasEnc
     */
    public function setMontoTotal($montoTotal)
    {
        $this->montoTotal = $montoTotal;

        return $this;
    }

    /**
     * Get montoTotal
     *
     * @return string
     */
    public function getMontoTotal()
    {
        return $this->montoTotal;
    }

    /**
     * Set gananciaTotal
     *
     * @param string $gananciaTotal
     *
     * @return VentasEnc
     */
    public function setGananciaTotal($gananciaTotal)
    {
        $this->gananciaTotal = $gananciaTotal;

        return $this;
    }

    /**
     * Get gananciaTotal
     *
     * @return string
     */
    public function getGananciaTotal()
    {
        return $this->gananciaTotal;
    }

    /**
     * Set codigoAgencia
     *
     * @param integer $codigoAgencia
     *
     * @return VentasEnc
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

