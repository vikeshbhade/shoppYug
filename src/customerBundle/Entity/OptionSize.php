<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionSize
 *
 * @ORM\Table(name="option_size")
 * @ORM\Entity
 */
class OptionSize
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
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_group_id", type="integer", nullable=false)
     */
    private $optionGroupId;



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
     * Set size
     *
     * @param integer $size
     * @return OptionSize
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set optionGroupId
     *
     * @param integer $optionGroupId
     * @return OptionSize
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
