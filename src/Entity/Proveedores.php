<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedores
 *
 * @ORM\Table(name="proveedores")
 * @ORM\Entity
 */
class Proveedores
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre_Provee", type="string", length=50, nullable=true)
     */
    private $nombreProvee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Direccion", type="string", length=50, nullable=true)
     */
    private $direccion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="teléfono_", type="integer", nullable=true)
     */
    private $teléfono;

    /**
     * @var int
     *
     * @ORM\Column(name="NIF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Stock_Provee", type="integer", nullable=true)
     */
    private $stockProvee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Productos", mappedBy="nif")
     */
    private $codigo = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getNombreProvee(): ?string
    {
        return $this->nombreProvee;
    }

    public function setNombreProvee(?string $nombreProvee): self
    {
        $this->nombreProvee = $nombreProvee;

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

    public function getTeléfono(): ?int
    {
        return $this->teléfono;
    }

    public function setTeléfono(?int $teléfono): self
    {
        $this->teléfono = $teléfono;

        return $this;
    }

    public function getNif(): ?int
    {
        return $this->nif;
    }

    public function getStockProvee(): ?int
    {
        return $this->stockProvee;
    }

    public function setStockProvee(?int $stockProvee): self
    {
        $this->stockProvee = $stockProvee;

        return $this;
    }

    /**
     * @return Collection<int, Productos>
     */
    public function getCodigo(): Collection
    {
        return $this->codigo;
    }

    public function addCodigo(Productos $codigo): self
    {
        if (!$this->codigo->contains($codigo)) {
            $this->codigo->add($codigo);
            $codigo->addNif($this);
        }

        return $this;
    }

    public function removeCodigo(Productos $codigo): self
    {
        if ($this->codigo->removeElement($codigo)) {
            $codigo->removeNif($this);
        }

        return $this;
    }

}
