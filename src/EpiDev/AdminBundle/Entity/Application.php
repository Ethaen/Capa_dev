<?php

namespace EpiDev\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="EpiDev\AdminBundle\Repository\ApplicationRepository")
 */
class Application
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="offer_name", type="string", length=255)
     */
    private $offerName;

    /**
     * @var string
     *
     * @ORM\Column(name="offerJob", type="string", length=255)
     */
    private $offerJob;

    /**
     * @var string
     *
     * @ORM\Column(name="offerCity", type="string", length=255)
     */
    private $offerCity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="application_date", type="datetime")
     */
    private $applicationDate;


    /**
     * @var integer
     *
     * @ORM\Column(name="offer_id", type="integer")
     */
    private $offer_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Application
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
     * Set offerJob
     *
     * @param string $offerJob
     *
     * @return Application
     */
    public function setOfferJob($offerJob)
    {
        $this->offerJob = $offerJob;

        return $this;
    }

    /**
     * Get offerJob
     *
     * @return string
     */
    public function getOfferJob()
    {
        return $this->offerJob;
    }

    /**
     * Set offerCity
     *
     * @param string $offerCity
     *
     * @return Application
     */
    public function setOfferCity($offerCity)
    {
        $this->offerCity = $offerCity;

        return $this;
    }

    /**
     * Get offerCity
     *
     * @return string
     */
    public function getOfferCity()
    {
        return $this->offerCity;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Application
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
     * Set offerName
     *
     * @param string $offerName
     *
     * @return Application
     */
    public function setOfferName($offerName)
    {
        $this->offerName = $offerName;

        return $this;
    }

    /**
     * Get offerName
     *
     * @return string
     */
    public function getOfferName()
    {
        return $this->offerName;
    }

    /**
     * Set applicationDate
     *
     * @param \DateTime $applicationDate
     *
     * @return Application
     */
    public function setApplicationDate($applicationDate)
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    /**
     * Get applicationDate
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * Get offer_id
     *
     * @return int
     */
    public function getOffer_id()
    {
        return $this->offer_id;
    }

    /**
     * Set offer_id
     *
     * @param int offer_id
     *
     * @return Application
     */
    public function setOffer_id($offer_id)
    {
        $this->offer_id = $offer_id;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userId
     *
     * @param int userId
     *
     * @return Application
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
