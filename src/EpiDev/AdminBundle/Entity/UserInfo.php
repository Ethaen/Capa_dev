<?php

namespace EpiDev\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInfo
 *
 * @ORM\Table(name="user_info")
 * @ORM\Entity(repositoryClass="EpiDev\AdminBundle\Repository\UserInfoRepository")
 */
class UserInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="civility", type="string", length=255)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, unique=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, unique=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_phone", type="string", length=255, unique=false)
     */
    private $mobilePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, unique=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=255, unique=false)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, unique=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, unique=false)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255, unique=false)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="employType", type="string", length=255, unique=false)
     */
    private $employType;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=255, nullable=true, unique=false)
     */
    private $cv;

    /**
     * @var string
     *
     * @ORM\Column(name="cv_generated_name", type="string", length=255, nullable=true)
     */
    private $cv_generated_name;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * Get id
     *
     * @return int
     */

     /**
      * @var string
      *
      * @ORM\Column(name="agency", type="string", length=255)
      */
     private $agency;

     /**
      * @var \DateTime
      *
      * @ORM\Column(name="subscription", type="date", nullable=true)
      */
     private $subscription;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get user_id
     *
     * @return int
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set user_id
     *
     * @param int $user_id
     *
     * @return UserInfo
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Set civility
     *
     * @param string $civility
     *
     * @return UserInfo
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get civility
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return UserInfo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return UserInfo
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserInfo
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return UserInfo
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     *
     * @return UserInfo
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return UserInfo
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return UserInfo
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return UserInfo
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
     * Set domain
     *
     * @param string $domain
     *
     * @return UserInfo
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return UserInfo
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set employType
     *
     * @param string $employType
     *
     * @return UserInfo
     */
    public function setEmployType($employType)
    {
        $this->employType = $employType;

        return $this;
    }

    /**
     * Get employType
     *
     * @return string
     */
    public function getEmployType()
    {
        return $this->employType;
    }

    /**
     * Set cv
     *
     * @param string $cv
     *
     * @return UserInfo
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set cv_generated_name
     *
     * @param string $cv_generated_name
     *
     * @return UserInfo
     */
    public function setCv_generated_name($cv_generated_name)
    {
        $this->cv_generated_name = $cv_generated_name;

        return $this;
    }

    /**
     * Get cv_generated_name
     *
     * @return string
     */
    public function getCv_generated_name()
    {
        return $this->cv_generated_name;
    }

/**
 * Set agency
 *
 * @param string $agency
 *
 * @return UserInfo
 */
public function setAgency($agency)
{
    $this->agency = $agency;

    return $this;
}

/**
 * Get agency
 *
 * @return string
 */
public function getAgency()
{
    return $this->agency;
}

/**
 * Set begin
 *
 * @param \DateTime $subscription
 *
 * @return UserInfo
 */
public function setSubscription($subscription)
{
    $this->subscription = $subscription;

    return $this;
}

/**
 * Get subscription
 *
 * @return \DateTime
 */
public function getSubscription()
{
    return $this->subscription;
}


}
