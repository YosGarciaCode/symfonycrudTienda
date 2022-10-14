<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos", indexes={@ORM\Index(name="Codigo", columns={"Codigo"}), @ORM\Index(name="IDcliente", columns={"IDcliente"})})
 * @ORM\Entity
 */
class Pedidos
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_de_compra", type="date", nullable=true)
     */
    private $fechaDeCompra;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega", type="date", nullable=true)
     */
    private $fechaEntrega;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedido;

    /**
     * @var \Cliente|null
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDcliente", referencedColumnName="IDcliente")
     * })
     */
    private $idcliente;

    /**
     * @var \Productos|null
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Codigo", referencedColumnName="Codigo")
     * })
     */
    private $codigo;

    public function getFechaDeCompra(): ?\DateTimeInterface
    {
        return $this->fechaDeCompra;
    }

    public function setFechaDeCompra(?\DateTimeInterface $fechaDeCompra): self
    {
        $this->fechaDeCompra = $fechaDeCompra;

        return $this;
    }

    public function getFechaEntrega(): ?\DateTimeInterface
    {
        return $this->fechaEntrega;
    }

    public function setFechaEntrega(?\DateTimeInterface $fechaEntrega): self
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    public function getIdPedido(): ?int
    {
        return $this->idPedido;
    }

    public function getIdcliente(): ?Cliente
    {
        return $this->idcliente;
    }

    public function setIdcliente(?Cliente $idcliente): self
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    public function getCodigo(): ?Productos
    {
        return $this->codigo;
    }

    public function setCodigo(?Productos $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }


}
