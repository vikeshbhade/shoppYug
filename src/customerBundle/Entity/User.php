<?php
namespace customerBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="string", length=255,nullable=true)
     */
    private $about;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    
    /**
     * Get about
     *
     * @return String
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set about
     *
     * @param String $about
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }
}