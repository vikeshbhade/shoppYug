<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceMasterColor
 *
 * @ORM\Table(name="service_master_color")
 * @ORM\Entity
 */
class ServiceMasterColor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionId;

    /**
     * @var string
     *
     * @ORM\Column(name="option_name", type="text", nullable=false)
     */
    private $optionName;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_group_id", type="integer", nullable=false)
     */
    private $optionGroupId;



    /**
     * Get optionId
     *
     * @return integer 
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set optionName
     *
     * @param string $optionName
     * @return ServiceMasterColor
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;

        return $this;
    }

    /**
     * Get optionName
     *
     * @return string 
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * Set optionGroupId
     *
     * @param integer $optionGroupId
     * @return ServiceMasterColor
     */
    public function setOptionGroupId($optionGroupId)
    {
        $this->optionGroupId = $optionGroupId;

        return $this;
    }

    /**
     * Get optionGroupId
     *
     * @return integer 
     */
    public function getOptionGroupId()
    {
        return $this->optionGroupId;
    }
}
