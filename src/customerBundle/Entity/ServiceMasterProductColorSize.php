<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceMasterProductColorSize
 *
 * @ORM\Table(name="service_master_product_color_size")
 * @ORM\Entity
 */
class ServiceMasterProductColorSize
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
     * @ORM\Column(name="productid", type="integer", nullable=false)
     */
    private $productid;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="text", nullable=false)
     */
    private $productName;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_color", type="integer", nullable=false)
     */
    private $productColor;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_size", type="integer", nullable=false)
     */
    private $productSize;



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
     * Set productid
     *
     * @param integer $productid
     * @return ServiceMasterProductColorSize
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return integer 
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return ServiceMasterProductColorSize
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return ServiceMasterProductColorSize
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
     * Set productColor
     *
     * @param integer $productColor
     * @return ServiceMasterProductColorSize
     */
    public function setProductColor($productColor)
    {
        $this->productColor = $productColor;

        return $this;
    }

    /**
     * Get productColor
     *
     * @return integer 
     */
    public function getProductColor()
    {
        return $this->productColor;
    }

    /**
     * Set productSize
     *
     * @param integer $productSize
     * @return ServiceMasterProductColorSize
     */
    public function setProductSize($productSize)
    {
        $this->productSize = $productSize;

        return $this;
    }

    /**
     * Get productSize
     *
     * @return integer 
     */
    public function getProductSize()
    {
        return $this->productSize;
    }
}
