<?php

namespace ComprasBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * ComprasEnc
 */
class ComprasEnc
{
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
     * @var int
     */
    private $codigoEmpleado;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    
    private $proveedor;
    
     private $empleado;
    
    
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
     * Set codigoCompraEnc
     *
     * @param integer $codigoCompraEnc
     *
     * @return codigoCompraEnc
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
     * Set observador
     *
     * @param string $observador
     *
     * @return ComprasEnc
     */
    public function setObservador($observador)
    {
        $this->observador = $observador;

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
     * Set codigoEmpleado
     *
     * @param integer $codigoEmpleado
     *
     * @return ComprasEnc
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return ComprasEnc
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
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }
    
    
    /**
     * Get Proveedor
     *
     * @return \MantenimientosBundle\Entity\Proveedor 
     */
   public function getProveedor()
    {
        return $this->proveedor;//->toArray();
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
        $this->proveedor= $proveedor;
        return $this;
    }
    
    /**
     * Get Empleado
     *
     * @return \MantenimientosBundle\Entity\Empleado 
     */
   public function getEmpleado()
    {
        return $this->empleado;//->toArray();
    }
   
    /**
     * Set empleado
     *
     * @param \MantenimientosBundle\Entity\Empleado $empleado
     *
     * @return empleado
     */
    public function setEmpleado(\MantenimientosBundle\Entity\Empleado $empleado = null)
    {
        $this->empleado= $empleado;
        return $this;
    }
    
    
}

