<?php

namespace MantenimientosBundle\Entity;

/**
 * Proveedor
 */
class Proveedor
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codigoProveedor;

    /**
     * @var string
     */
    private $nombreProveedor;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $contacto;


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
     * Set codigoProveedor
     *
     * @param integer $codigoProveedor
     *
     * @return Proveedor
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
     * Set nombreProveedor
     *
     * @param string $nombreProveedor
     *
     * @return Proveedor
     */
    public function setNombreProveedor($nombreProveedor)
    {
        $this->nombreProveedor = $nombreProveedor;

        return $this;
    }

    /**
     * Get nombreProveedor
     *
     * @return string
     */
    public function getNombreProveedor()
    {
        return $this->nombreProveedor;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Proveedor
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

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Proveedor
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }
}

