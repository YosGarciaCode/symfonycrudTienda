<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity
 */
class Productos
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre_producto", type="string", length=50, nullable=true)
     */
    private $nombreProducto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Precio_Unitario", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $precioUnitario;

    /**
     * @var int
     *
     * @ORM\Column(name="Codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Proveedores", mappedBy="codigo")
     */
    private $nif = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nif = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getNombreProducto(): ?string
    {
        return $this->nombreProducto;
    }

    public function setNombreProducto(?string $nombreProducto): self
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    public function getPrecioUnitario(): ?string
    {
        return $this->precioUnitario;
    }

    public function setPrecioUnitario(?string $precioUnitario): self
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @return Collection<int, Proveedores>
     */
    public function getNif(): Collection
    {
        return $this->nif;
    }

    public function addNif(Proveedores $nif): self
    {
        if (!$this->nif->contains($nif)) {
            $this->nif->add($nif);
            $nif->addCodigo($this);
        }

        return $this;
    }

    public function removeNif(Proveedores $nif): self
    {
        if ($this->nif->removeElement($nif)) {
            $nif->removeCodigo($this);
        }

        return $this;
    }

}
