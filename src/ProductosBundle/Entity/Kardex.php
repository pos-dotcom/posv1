<?php

namespace ProductosBundle\Entity;

/**
 * Kardex
 */
class Kardex
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoKardex;

    /**
     * @var string
     */
    private $codigoMovimiento;

    /**
     * @var int
     */
    private $codigoProducto;

    /**
     * @var int
     */
    private $codigoAgencia;

    /**
     * @var string
     */
    private $saldoAnterior;

    
    /**
     * @var string
     */
    private $totalAnterior;

    /**
     * @var string
     */
    private $salida;

    /**
     * @var string
     */
    private $precioSalida;

    /**
     * @var string
     */
    private $ingreso;

    /**
     * @var string
     */
    private $precioIngreso;

    /**
     * @var string
     */
    private $saldoFinal;

    /**
     * @var string
     */
    private $totalFinal;

    /**
     * @var \DateTime
     */
    private $fechaMovimiento;

    /**
     * @var int
     */
    private $codigoEmpleado;
    
    /*
     * @var codigoCompra
     * 
     */
    private $codigoCompra;

    /*
     * Get $codigoCompra
     * 
     * return $codigoCompra
     */
    
    public function getcodigoCompra()
    {
        
      return $this->codigoCompra;  
        
    }
    
    /*
     * set $codigoCompra
     * 
     * @param $codigoCompra
     * return $codigoCompra
     * 
     */
    
    public function setcodigoCompra($codigoCompra)
    {    
        $this->codigoCompra=$codigoCompra;
        return $this;
    
    }
    
    public function __construct() {
        
    }

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
     * Set codigoKardex
     *
     * @param integer $codigoKardex
     *
     * @return codigoKardex
     */
    public function setCodigoKardex($codigoKardex)
    {
        $this->codigoKardex = $codigoKardex;

        return $this;
    }

    /**
     * Get codigoKardex
     *
     * @return int
     */
    public function getCodigoKardex()
    {
        return $this->codigoKardex;
    }

    /**
     * Set codigoMovimiento
     *
     * @param string $codigoMovimiento
     *
     * @return Kardex
     */
    public function setCodigoMovimiento($codigoMovimiento)
    {
        $this->codigoMovimiento = $codigoMovimiento;

        return $this;
    }

    /**
     * Get codigoMovimiento
     *
     * @return string
     */
    public function getCodigoMovimiento()
    {
        return $this->codigoMovimiento;
    }

    /**
     * Set codigoProducto
     *
     * @param integer $codigoProducto
     *
     * @return $codigoProducto
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
     * Set codigoAgencia
     *
     * @param integer $codigoAgencia
     *
     * @return Kardex
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

    /**
     * Set saldoAnterior
     *
     * @param string $saldoAnterior
     *
     * @return Kardex
     */
    public function setSaldoAnterior($saldoAnterior)
    {
        $this->saldoAnterior = $saldoAnterior;

        return $this;
    }

    /**
     * Get saldoAnterior
     *
     * @return string
     */
    public function getSaldoAnterior()
    {
        return $this->saldoAnterior;
    }

    

    /**
     * Set totalAnterior
     *
     * @param string $totalAnterior
     *
     * @return Kardex
     */
    public function setTotalAnterior($totalAnterior)
    {
        $this->totalAnterior = $totalAnterior;

        return $this;
    }

    /**
     * Get totalAnterior
     *
     * @return string
     */
    public function getTotalAnterior()
    {
        return $this->totalAnterior;
    }

    /**
     * Set salida
     *
     * @param string $salida
     *
     * @return Kardex
     */
    public function setSalida($salida)
    {
        $this->salida = $salida;

        return $this;
    }

    /**
     * Get salida
     *
     * @return string
     */
    public function getSalida()
    {
        return $this->salida;
    }

    /**
     * Set precioSalida
     *
     * @param string $precioSalida
     *
     * @return Kardex
     */
    public function setPrecioSalida($precioSalida)
    {
        $this->precioSalida = $precioSalida;

        return $this;
    }

    /**
     * Get precioSalida
     *
     * @return string
     */
    public function getPrecioSalida()
    {
        return $this->precioSalida;
    }

    /**
     * Set ingreso
     *
     * @param string $ingreso
     *
     * @return Kardex
     */
    public function setIngreso($ingreso)
    {
        $this->ingreso = $ingreso;

        return $this;
    }

    /**
     * Get ingreso
     *
     * @return string
     */
    public function getIngreso()
    {
        return $this->ingreso;
    }

    /**
     * Set precioIngreso
     *
     * @param string $precioIngreso
     *
     * @return Kardex
     */
    public function setPrecioIngreso($precioIngreso)
    {
        $this->precioIngreso = $precioIngreso;

        return $this;
    }

    /**
     * Get precioIngreso
     *
     * @return string
     */
    public function getPrecioIngreso()
    {
        return $this->precioIngreso;
    }

    /**
     * Set saldoFinal
     *
     * @param string $saldoFinal
     *
     * @return Kardex
     */
    public function setSaldoFinal($saldoFinal)
    {
        $this->saldoFinal = $saldoFinal;

        return $this;
    }

    /**
     * Get saldoFinal
     *
     * @return string
     */
    public function getSaldoFinal()
    {
        return $this->saldoFinal;
    }

    /**
     * Set totalFinal
     *
     * @param string $totalFinal
     *
     * @return Kardex
     */
    public function setTotalFinal($totalFinal)
    {
        $this->totalFinal = $totalFinal;

        return $this;
    }

    /**
     * Get totalFinal
     *
     * @return string
     */
    public function getTotalFinal()
    {
        return $this->totalFinal;
    }

    /**
     * Set fechaMovimiento
     *
     * @param \DateTime $fechaMovimiento
     *
     * @return Kardex
     */
    public function setFechaMovimiento($fechaMovimiento)
    {
        $this->fechaMovimiento = $fechaMovimiento;

        return $this;
    }

    /**
     * Get fechaMovimiento
     *
     * @return \DateTime
     */
    public function getFechaMovimiento()
    {
        return $this->fechaMovimiento;
    }

    /**
     * Set codigoEmpleado
     *
     * @param integer $codigoEmpleado
     *
     * @return Kardex
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
}

