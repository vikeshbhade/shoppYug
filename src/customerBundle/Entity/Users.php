<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="text", nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="text", nullable=false)
     */
    private $userPassword;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_active", type="boolean", nullable=false)
     */
    private $userActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_mobile", type="integer", nullable=true)
     */
    private $userMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ip", type="text", nullable=false)
     */
    private $userIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_verified", type="boolean", nullable=false)
     */
    private $userVerified;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_alt_no", type="integer", nullable=true)
     */
    private $userAltNo;



    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return Users
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return Users
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userActive
     *
     * @param boolean $userActive
     * @return Users
     */
    public function setUserActive($userActive)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive
     *
     * @return boolean 
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * Set userMobile
     *
     * @param integer $userMobile
     * @return Users
     */
    public function setUserMobile($userMobile)
    {
        $this->userMobile = $userMobile;

        return $this;
    }

    /**
     * Get userMobile
     *
     * @return integer 
     */
    public function getUserMobile()
    {
        return $this->userMobile;
    }

    /**
     * Set userIp
     *
     * @param string $userIp
     * @return Users
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;

        return $this;
    }

    /**
     * Get userIp
     *
     * @return string 
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * Set userVerified
     *
     * @param boolean $userVerified
     * @return Users
     */
    public function setUserVerified($userVerified)
    {
        $this->userVerified = $userVerified;

        return $this;
    }

    /**
     * Get userVerified
     *
     * @return boolean 
     */
    public function getUserVerified()
    {
        return $this->userVerified;
    }

    /**
     * Set userAltNo
     *
     * @param integer $userAltNo
     * @return Users
     */
    public function setUserAltNo($userAltNo)
    {
        $this->userAltNo = $userAltNo;

        return $this;
    }

    /**
     * Get userAltNo
     *
     * @return integer 
     */
    public function getUserAltNo()
    {
        return $this->userAltNo;
    }
}
