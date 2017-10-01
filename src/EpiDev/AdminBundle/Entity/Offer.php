<?php

namespace EpiDev\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="offer")
 * @ORM\Entity(repositoryClass="EpiDev\AdminBundle\Repository\OfferRepository")
 */
class Offer
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
     * @ORM\Column(name="Title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Référence", type="string", length=255)
     */
    private $référence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Begin", type="date")
     */
    private $begin;

    /**
     * @var bool
     *
     * @ORM\Column(name="Active", type="boolean")
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="Department", type="string", length=255)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="Agency", type="string", length=255)
     */
    private $agency;

    /**
     * @var string
     *
     * @ORM\Column(name="Domain", type="string", length=255)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="Job", type="string", length=255)
     */
    private $job;

    /**
     * @var bool
     *
     * @ORM\Column(name="Time", type="boolean")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="Experience", type="string", length=255)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="Degree", type="string", length=255)
     */
    private $degree;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;


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
     * Set title
     *
     * @param string $title
     *
     * @return Offer
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set référence
     *
     * @param string $référence
     *
     * @return Offer
     */
    public function setRéférence($référence)
    {
        $this->référence = $référence;

        return $this;
    }

    /**
     * Get référence
     *
     * @return string
     */
    public function getRéférence()
    {
        return $this->référence;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return Offer
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Offer
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return Offer
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Offer
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
     * Set agency
     *
     * @param string $agency
     *
     * @return Offer
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
     * Set domain
     *
     * @param string $domain
     *
     * @return Offer
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
     * @return Offer
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
     * Set time
     *
     * @param boolean $time
     *
     * @return Offer
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return bool
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return Offer
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set degree
     *
     * @param string $degree
     *
     * @return Offer
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * Get degree
     *
     * @return string
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Offer
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
