<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CancelledOrders
 *
 * @ORM\Table(name="cancelled_orders")
 * @ORM\Entity
 */
class CancelledOrders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_number", type="integer", nullable=false)
     */
    private $orderNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="refund_eligible", type="boolean", nullable=false)
     */
    private $refundEligible;

    /**
     * @var integer
     *
     * @ORM\Column(name="refund_id", type="integer", nullable=false)
     */
    private $refundId;



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
     * Set orderId
     *
     * @param integer $orderId
     * @return CancelledOrders
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderNumber
     *
     * @param integer $orderNumber
     * @return CancelledOrders
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return integer 
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return CancelledOrders
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CancelledOrders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set refundEligible
     *
     * @param boolean $refundEligible
     * @return CancelledOrders
     */
    public function setRefundEligible($refundEligible)
    {
        $this->refundEligible = $refundEligible;

        return $this;
    }

    /**
     * Get refundEligible
     *
     * @return boolean 
     */
    public function getRefundEligible()
    {
        return $this->refundEligible;
    }

    /**
     * Set refundId
     *
     * @param integer $refundId
     * @return CancelledOrders
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;

        return $this;
    }

    /**
     * Get refundId
     *
     * @return integer 
     */
    public function getRefundId()
    {
        return $this->refundId;
    }
}
