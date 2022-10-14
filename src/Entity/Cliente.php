<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDcliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre_Apellido", type="string", length=50, nullable=true)
     */
    private $nombreApellido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=true)
     */
    private $direccion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="telefono_", type="integer", nullable=true)
     */
    private $telefono;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodigoPostal", type="integer", nullable=true)
     */
    private $codigopostal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_de_nacimiento", type="date", nullable=true)
     */
    private $fechaDeNacimiento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=true)
     */
    private $provincia;

    public function getIdcliente(): ?int
    {
        return $this->idcliente;
    }

    public function getNombreApellido(): ?string
    {
        return $this->nombreApellido;
    }

    public function setNombreApellido(?string $nombreApellido): self
    {
        $this->nombreApellido = $nombreApellido;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(?int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getCodigopostal(): ?int
    {
        return $this->codigopostal;
    }

    public function setCodigopostal(?int $codigopostal): self
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    public function getFechaDeNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaDeNacimiento;
    }

    public function setFechaDeNacimiento(?\DateTimeInterface $fechaDeNacimiento): self
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }


}
