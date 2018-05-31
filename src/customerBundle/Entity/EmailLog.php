<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailLog
 *
 * @ORM\Table(name="email_log")
 * @ORM\Entity
 */
class EmailLog
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
     * @ORM\Column(name="to", type="text", nullable=false)
     */
    private $to;

    /**
     * @var string
     *
     * @ORM\Column(name="cc", type="text", nullable=false)
     */
    private $cc;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;



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
     * Set to
     *
     * @param string $to
     * @return EmailLog
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string 
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set cc
     *
     * @param string $cc
     * @return EmailLog
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * Get cc
     *
     * @return string 
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return EmailLog
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return EmailLog
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
