<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsOption
 *
 * @ORM\Table(name="products_option")
 * @ORM\Entity
 */
class ProductsOption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="products_option_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productsOptionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="color_id", type="integer", nullable=false)
     */
    private $colorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="products_size", type="integer", nullable=false)
     */
    private $productsSize;

    /**
     * @var float
     *
     * @ORM\Column(name="product_price_increment", type="float", precision=10, scale=0, nullable=false)
     */
    private $productPriceIncrement;



    /**
     * Get productsOptionId
     *
     * @return integer 
     */
    public function getProductsOptionId()
    {
        return $this->productsOptionId;
    }

    /**
     * Set colorId
     *
     * @param integer $colorId
     * @return ProductsOption
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
     * Set productId
     *
     * @param integer $productId
     * @return ProductsOption
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
     * Set productsSize
     *
     * @param integer $productsSize
     * @return ProductsOption
     */
    public function setProductsSize($productsSize)
    {
        $this->productsSize = $productsSize;

        return $this;
    }

    /**
     * Get productsSize
     *
     * @return integer 
     */
    public function getProductsSize()
    {
        return $this->productsSize;
    }

    /**
     * Set productPriceIncrement
     *
     * @param float $productPriceIncrement
     * @return ProductsOption
     */
    public function setProductPriceIncrement($productPriceIncrement)
    {
        $this->productPriceIncrement = $productPriceIncrement;

        return $this;
    }

    /**
     * Get productPriceIncrement
     *
     * @return float 
     */
    public function getProductPriceIncrement()
    {
        return $this->productPriceIncrement;
    }
}
