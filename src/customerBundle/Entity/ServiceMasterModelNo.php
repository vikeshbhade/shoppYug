<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceMasterModelNo
 *
 * @ORM\Table(name="service_master_model_no")
 * @ORM\Entity
 */
class ServiceMasterModelNo
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
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="text", nullable=false)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="model_no", type="text", nullable=false)
     */
    private $modelNo;



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
     * Set productId
     *
     * @param integer $productId
     * @return ServiceMasterModelNo
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
     * Set productName
     *
     * @param string $productName
     * @return ServiceMasterModelNo
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
     * Set modelNo
     *
     * @param string $modelNo
     * @return ServiceMasterModelNo
     */
    public function setModelNo($modelNo)
    {
        $this->modelNo = $modelNo;

        return $this;
    }

    /**
     * Get modelNo
     *
     * @return string 
     */
    public function getModelNo()
    {
        return $this->modelNo;
    }
}
