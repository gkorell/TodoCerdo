<?php

namespace TodoCerdo\TodoCerdoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TodoCerdo\TodoCerdoBundle\Entity\Detalle
 *
 * @ORM\Table(name="Detalle")
 * @ORM\Entity
 */
class Detalle
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer $cantidad
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false,options={"default"=0})
     */
    protected $cantidad;

    /**
     * @var "pedido"
     *
     * @ORM\ManyToOne(targetEntity="pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     * })
     */
    protected $pedido;

    /**
     * @var "producto"
     *
     * @ORM\ManyToOne(targetEntity="producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     * })
     */
    protected $producto;




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set pedido
     *
     * @param TodoCerdo\TodoCerdoBundle\Entity\pedido $pedido
     */
    public function setPedido(\TodoCerdo\TodoCerdoBundle\Entity\pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * Get pedido
     *
     * @return TodoCerdo\TodoCerdoBundle\Entity\pedido 
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set producto
     *
     * @param TodoCerdo\TodoCerdoBundle\Entity\producto $producto
     */
    public function setProducto(\TodoCerdo\TodoCerdoBundle\Entity\producto $producto)
    {
        $this->producto = $producto;
    }

    /**
     * Get producto
     *
     * @return TodoCerdo\TodoCerdoBundle\Entity\producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }
    
    /*
     * @var integer
     * 
     */
    public function calcularSubtotal(){
        return $this->cantidad * $this->producto->calcularPrecio();
    }
}