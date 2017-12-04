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
     * @var \DateTime
     */
    private $fechaIngreso;

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
    
    
    private $vendedor;
    
    private $agencia;


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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return VentasEnc
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreo()
    {
        return $this->fechaIngreso;
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
    
    
    /**
     * Get vendedor
     *
     * @return \MantenimientosBundle\Entity\Empleados 
     */
    public function getVendedor()
    {
        return $this->vendedor;        
    }
    
    
    /**
     * Set vendedor
     *
     * @param \MantenimientosBundle\Entity\Empleados $empleado
     *
     * @return proveedor
     */
    public function setVendedor(\MantenimientosBundle\Entity\Empleados $empleado=null)
    {
        $this->vendedor=$empleado;
        return $this;
               
    }
    
    /*
     * Get agencia
     * @return \MantenimientosBundle\Entity\Agencia
     */
    public function getAgencia()
    {
            return $this->agencia;
    }
    
    /*
     * Set agencia
     * @param \MantenimientoBundle\Entity\Agencia $agencia
     * @return agencia 
     */
    public function setAgencia(\MantenimientoBundle\Entity\Agencia $agencia=null)
    {
        $this->agencia=$agencia;
        return $this;
        
    }
}

