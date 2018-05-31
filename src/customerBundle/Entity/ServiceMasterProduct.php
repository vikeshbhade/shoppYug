<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceMasterProduct
 *
 * @ORM\Table(name="service_master_product")
 * @ORM\Entity
 */
class ServiceMasterProduct
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
     * @var string
     *
     * @ORM\Column(name="productname", type="text", nullable=false)
     */
    private $productname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isactive", type="boolean", nullable=false)
     */
    private $isactive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;



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
     * Set productname
     *
     * @param string $productname
     * @return ServiceMasterProduct
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string 
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * Set isactive
     *
     * @param boolean $isactive
     * @return ServiceMasterProduct
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive
     *
     * @return boolean 
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ServiceMasterProduct
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
}
