<?php

namespace customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 */
class Address
{
    /**
     * @var integer
     *
     * @ORM\Column(name="address_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="text", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="text", nullable=false)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="text", nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="text", nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="text", nullable=false)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="text", nullable=false)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="landmark", type="text", nullable=false)
     */
    private $landmark;

    /**
     * @var string
     *
     * @ORM\Column(name="address_type", type="text", nullable=false)
     */
    private $addressType;



    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return Address
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Address
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Address
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Address
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set landmark
     *
     * @param string $landmark
     * @return Address
     */
    public function setLandmark($landmark)
    {
        $this->landmark = $landmark;

        return $this;
    }

    /**
     * Get landmark
     *
     * @return string 
     */
    public function getLandmark()
    {
        return $this->landmark;
    }

    /**
     * Set addressType
     *
     * @param string $addressType
     * @return Address
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return string 
     */
    public function getAddressType()
    {
        return $this->addressType;
    }
}
