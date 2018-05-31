<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionsGroup
 *
 * @ORM\Table(name="options_group")
 * @ORM\Entity
 */
class OptionsGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="options_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionsGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="options_group_name", type="text", nullable=false)
     */
    private $optionsGroupName;



    /**
     * Get optionsGroupId
     *
     * @return integer 
     */
    public function getOptionsGroupId()
    {
        return $this->optionsGroupId;
    }

    /**
     * Set optionsGroupName
     *
     * @param string $optionsGroupName
     * @return OptionsGroup
     */
    public function setOptionsGroupName($optionsGroupName)
    {
        $this->optionsGroupName = $optionsGroupName;

        return $this;
    }

    /**
     * Get optionsGroupName
     *
     * @return string 
     */
    public function getOptionsGroupName()
    {
        return $this->optionsGroupName;
    }
}
