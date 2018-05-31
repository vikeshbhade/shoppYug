<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orders_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ordersId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_user_id", type="integer", nullable=false)
     */
    private $orderUserId;

    /**
     * @var float
     *
     * @ORM\Column(name="order_amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $orderAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="order_billing_name", type="text", nullable=false)
     */
    private $orderBillingName;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_pincode", type="integer", nullable=false)
     */
    private $orderPincode;

    /**
     * @var string
     *
     * @ORM\Column(name="order_ship_city", type="text", nullable=false)
     */
    private $orderShipCity;

    /**
     * @var string
     *
     * @ORM\Column(name="order_ship_state", type="text", nullable=false)
     */
    private $orderShipState;

    /**
     * @var string
     *
     * @ORM\Column(name="order_ship_landmark", type="text", nullable=false)
     */
    private $orderShipLandmark;

    /**
     * @var string
     *
     * @ORM\Column(name="order_ship_address1", type="text", nullable=false)
     */
    private $orderShipAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="order_ship_address2", type="text", nullable=false)
     */
    private $orderShipAddress2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=false)
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="order_tracking_no", type="text", nullable=false)
     */
    private $orderTrackingNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_paymentid", type="integer", nullable=false)
     */
    private $orderPaymentid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="order_cancelled", type="boolean", nullable=false)
     */
    private $orderCancelled;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_cancelled_id", type="integer", nullable=false)
     */
    private $orderCancelledId;



    /**
     * Get ordersId
     *
     * @return integer 
     */
    public function getOrdersId()
    {
        return $this->ordersId;
    }

    /**
     * Set orderUserId
     *
     * @param integer $orderUserId
     * @return Orders
     */
    public function setOrderUserId($orderUserId)
    {
        $this->orderUserId = $orderUserId;

        return $this;
    }

    /**
     * Get orderUserId
     *
     * @return integer 
     */
    public function getOrderUserId()
    {
        return $this->orderUserId;
    }

    /**
     * Set orderAmount
     *
     * @param float $orderAmount
     * @return Orders
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }

    /**
     * Get orderAmount
     *
     * @return float 
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Set orderBillingName
     *
     * @param string $orderBillingName
     * @return Orders
     */
    public function setOrderBillingName($orderBillingName)
    {
        $this->orderBillingName = $orderBillingName;

        return $this;
    }

    /**
     * Get orderBillingName
     *
     * @return string 
     */
    public function getOrderBillingName()
    {
        return $this->orderBillingName;
    }

    /**
     * Set orderPincode
     *
     * @param integer $orderPincode
     * @return Orders
     */
    public function setOrderPincode($orderPincode)
    {
        $this->orderPincode = $orderPincode;

        return $this;
    }

    /**
     * Get orderPincode
     *
     * @return integer 
     */
    public function getOrderPincode()
    {
        return $this->orderPincode;
    }

    /**
     * Set orderShipCity
     *
     * @param string $orderShipCity
     * @return Orders
     */
    public function setOrderShipCity($orderShipCity)
    {
        $this->orderShipCity = $orderShipCity;

        return $this;
    }

    /**
     * Get orderShipCity
     *
     * @return string 
     */
    public function getOrderShipCity()
    {
        return $this->orderShipCity;
    }

    /**
     * Set orderShipState
     *
     * @param string $orderShipState
     * @return Orders
     */
    public function setOrderShipState($orderShipState)
    {
        $this->orderShipState = $orderShipState;

        return $this;
    }

    /**
     * Get orderShipState
     *
     * @return string 
     */
    public function getOrderShipState()
    {
        return $this->orderShipState;
    }

    /**
     * Set orderShipLandmark
     *
     * @param string $orderShipLandmark
     * @return Orders
     */
    public function setOrderShipLandmark($orderShipLandmark)
    {
        $this->orderShipLandmark = $orderShipLandmark;

        return $this;
    }

    /**
     * Get orderShipLandmark
     *
     * @return string 
     */
    public function getOrderShipLandmark()
    {
        return $this->orderShipLandmark;
    }

    /**
     * Set orderShipAddress1
     *
     * @param string $orderShipAddress1
     * @return Orders
     */
    public function setOrderShipAddress1($orderShipAddress1)
    {
        $this->orderShipAddress1 = $orderShipAddress1;

        return $this;
    }

    /**
     * Get orderShipAddress1
     *
     * @return string 
     */
    public function getOrderShipAddress1()
    {
        return $this->orderShipAddress1;
    }

    /**
     * Set orderShipAddress2
     *
     * @param string $orderShipAddress2
     * @return Orders
     */
    public function setOrderShipAddress2($orderShipAddress2)
    {
        $this->orderShipAddress2 = $orderShipAddress2;

        return $this;
    }

    /**
     * Get orderShipAddress2
     *
     * @return string 
     */
    public function getOrderShipAddress2()
    {
        return $this->orderShipAddress2;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return Orders
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set orderTrackingNo
     *
     * @param string $orderTrackingNo
     * @return Orders
     */
    public function setOrderTrackingNo($orderTrackingNo)
    {
        $this->orderTrackingNo = $orderTrackingNo;

        return $this;
    }

    /**
     * Get orderTrackingNo
     *
     * @return string 
     */
    public function getOrderTrackingNo()
    {
        return $this->orderTrackingNo;
    }

    /**
     * Set orderPaymentid
     *
     * @param integer $orderPaymentid
     * @return Orders
     */
    public function setOrderPaymentid($orderPaymentid)
    {
        $this->orderPaymentid = $orderPaymentid;

        return $this;
    }

    /**
     * Get orderPaymentid
     *
     * @return integer 
     */
    public function getOrderPaymentid()
    {
        return $this->orderPaymentid;
    }

    /**
     * Set orderCancelled
     *
     * @param boolean $orderCancelled
     * @return Orders
     */
    public function setOrderCancelled($orderCancelled)
    {
        $this->orderCancelled = $orderCancelled;

        return $this;
    }

    /**
     * Get orderCancelled
     *
     * @return boolean 
     */
    public function getOrderCancelled()
    {
        return $this->orderCancelled;
    }

    /**
     * Set orderCancelledId
     *
     * @param integer $orderCancelledId
     * @return Orders
     */
    public function setOrderCancelledId($orderCancelledId)
    {
        $this->orderCancelledId = $orderCancelledId;

        return $this;
    }

    /**
     * Get orderCancelledId
     *
     * @return integer 
     */
    public function getOrderCancelledId()
    {
        return $this->orderCancelledId;
    }
}
