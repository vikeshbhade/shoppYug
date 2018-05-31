<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetails
 *
 * @ORM\Table(name="order_details")
 * @ORM\Entity
 */
class OrderDetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_details_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderDetailsId;

    /**
     * @var string
     *
     * @ORM\Column(name="order_number", type="text", nullable=false)
     */
    private $orderNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="text", nullable=false)
     */
    private $productName;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var float
     *
     * @ORM\Column(name="product_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $productPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking_no", type="text", nullable=false)
     */
    private $trackingNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="datetime", nullable=false)
     */
    private $deliveryDate;



    /**
     * Get orderDetailsId
     *
     * @return integer 
     */
    public function getOrderDetailsId()
    {
        return $this->orderDetailsId;
    }

    /**
     * Set orderNumber
     *
     * @param string $orderNumber
     * @return OrderDetails
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return string 
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return OrderDetails
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
     * Set productName
     *
     * @param string $productName
     * @return OrderDetails
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return OrderDetails
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
     * Set productPrice
     *
     * @param float $productPrice
     * @return OrderDetails
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return float 
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set trackingNo
     *
     * @param string $trackingNo
     * @return OrderDetails
     */
    public function setTrackingNo($trackingNo)
    {
        $this->trackingNo = $trackingNo;

        return $this;
    }

    /**
     * Get trackingNo
     *
     * @return string 
     */
    public function getTrackingNo()
    {
        return $this->trackingNo;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return OrderDetails
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime 
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
}
