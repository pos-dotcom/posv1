<?php

namespace MantenimientosBundle\Entity;

/**
 * Empleados
 */
class Empleados
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoEmpleado;

    /**
     * @var string
     */
    private $nombres;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $dui;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefono;


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
     * Set codigoEmpleado
     *
     * @param integer $codigoEmpleado
     *
     * @return Empleados
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
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Empleados
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Empleados
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set dui
     *
     * @param string $dui
     *
     * @return Empleados
     */
    public function setDui($dui)
    {
        $this->dui = $dui;

        return $this;
    }

    /**
     * Get dui
     *
     * @return string
     */
    public function getDui()
    {
        return $this->dui;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empleados
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empleados
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}

