<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seller_id", type="integer", nullable=false)
     */
    private $sellerId;

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
     * @var integer
     *
     * @ORM\Column(name="brand_id", type="integer", nullable=false)
     */
    private $brandId;

    /**
     * @var float
     *
     * @ORM\Column(name="product_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $productPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="product_weight", type="text", nullable=false)
     */
    private $productWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="product_details", type="text", nullable=false)
     */
    private $productDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="text", nullable=false)
     */
    private $productDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_category_id", type="integer", nullable=false)
     */
    private $productCategoryId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="product_add_date", type="date", nullable=false)
     */
    private $productAddDate;

    /**
     * @var string
     *
     * @ORM\Column(name="product_img", type="text", nullable=false)
     */
    private $productImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_stock", type="integer", nullable=false)
     */
    private $productStock;

    /**
     * @var float
     *
     * @ORM\Column(name="product_offer_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $productOfferPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_active", type="integer", nullable=false)
     */
    private $productActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="color_id", type="integer", nullable=false)
     */
    private $colorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="size_id", type="integer", nullable=false)
     */
    private $sizeId;



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
     * Set sellerId
     *
     * @param integer $sellerId
     * @return Products
     */
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Get sellerId
     *
     * @return integer 
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return Products
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
     * @return Products
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

    /**
     * Set brandId
     *
     * @param integer $brandId
     * @return Products
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * Get brandId
     *
     * @return integer 
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Set productPrice
     *
     * @param float $productPrice
     * @return Products
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
     * Set productWeight
     *
     * @param string $productWeight
     * @return Products
     */
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;

        return $this;
    }

    /**
     * Get productWeight
     *
     * @return string 
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * Set productDetails
     *
     * @param string $productDetails
     * @return Products
     */
    public function setProductDetails($productDetails)
    {
        $this->productDetails = $productDetails;

        return $this;
    }

    /**
     * Get productDetails
     *
     * @return string 
     */
    public function getProductDetails()
    {
        return $this->productDetails;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     * @return Products
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string 
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set productCategoryId
     *
     * @param integer $productCategoryId
     * @return Products
     */
    public function setProductCategoryId($productCategoryId)
    {
        $this->productCategoryId = $productCategoryId;

        return $this;
    }

    /**
     * Get productCategoryId
     *
     * @return integer 
     */
    public function getProductCategoryId()
    {
        return $this->productCategoryId;
    }

    /**
     * Set productAddDate
     *
     * @param \DateTime $productAddDate
     * @return Products
     */
    public function setProductAddDate($productAddDate)
    {
        $this->productAddDate = $productAddDate;

        return $this;
    }

    /**
     * Get productAddDate
     *
     * @return \DateTime 
     */
    public function getProductAddDate()
    {
        return $this->productAddDate;
    }

    /**
     * Set productImg
     *
     * @param string $productImg
     * @return Products
     */
    public function setProductImg($productImg)
    {
        $this->productImg = $productImg;

        return $this;
    }

    /**
     * Get productImg
     *
     * @return string 
     */
    public function getProductImg()
    {
        return $this->productImg;
    }

    /**
     * Set productStock
     *
     * @param integer $productStock
     * @return Products
     */
    public function setProductStock($productStock)
    {
        $this->productStock = $productStock;

        return $this;
    }

    /**
     * Get productStock
     *
     * @return integer 
     */
    public function getProductStock()
    {
        return $this->productStock;
    }

    /**
     * Set productOfferPrice
     *
     * @param float $productOfferPrice
     * @return Products
     */
    public function setProductOfferPrice($productOfferPrice)
    {
        $this->productOfferPrice = $productOfferPrice;

        return $this;
    }

    /**
     * Get productOfferPrice
     *
     * @return float 
     */
    public function getProductOfferPrice()
    {
        return $this->productOfferPrice;
    }

    /**
     * Set productActive
     *
     * @param integer $productActive
     * @return Products
     */
    public function setProductActive($productActive)
    {
        $this->productActive = $productActive;

        return $this;
    }

    /**
     * Get productActive
     *
     * @return integer 
     */
    public function getProductActive()
    {
        return $this->productActive;
    }

    /**
     * Set colorId
     *
     * @param integer $colorId
     * @return Products
     */
    public function setColorId($colorId)
    {
        $this->colorId = $colorId;

        return $this;
    }

    /**
     * Get colorId
     *
     * @return integer 
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * Set sizeId
     *
     * @param integer $sizeId
     * @return Products
     */
    public function setSizeId($sizeId)
    {
        $this->sizeId = $sizeId;

        return $this;
    }

    /**
     * Get sizeId
     *
     * @return integer 
     */
    public function getSizeId()
    {
        return $this->sizeId;
    }
}
