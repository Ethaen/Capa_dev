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
     * @var \DateTime
     *
     * @ORM\Column(name="PublishDate", type="date", nullable=true)
     */
    private $publishDate;

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
     * @ORM\Column(name="Job_type", type="boolean")
     */
    private $job_type;

    /**
     * @var string
     *
     * @ORM\Column(name="Duration", type="string", length=255)
     */
    private $duration;

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
     * @var string
     *
     * @ORM\Column(name="Description_txt", type="text")
     */
    private $description_txt;

    /**
     * @var string
     *
     * @ORM\Column(name="img_src", type="text")
     */
    private $img_src;

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
     * Set publishDate
     *
     * @param \DateTime $publishDate
     *
     * @return Offer
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * Get publishDate
     *
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publishDate;
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
     * Set job_type
     *
     * @param boolean $job_type
     *
     * @return Offer
     */
    public function setJob_type($job_type)
    {
        $this->job_type = $job_type;

        return $this;
    }

    /**
     * Get job_type
     *
     * @return bool
     */
    public function getJob_type()
    {
        return $this->job_type;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Offer
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
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

    /**
     * Set description_txt
     *
     * @param string $description_txt
     *
     * @return Offer
     */
    public function setDescription_txt($description_txt)
    {
        $this->description_txt = $description_txt;

        return $this;
    }

    /**
     * Get description_txt
     *
     * @return string
     */
    public function getDescription_txt()
    {
        return $this->description_txt;
    }

    /**
     * Set img_src
     *
     * @param string $img_src
     *
     * @return Offer
     */
    public function setImg_src($img_src)
    {
        $this->img_src = $img_src;

        return $this;
    }

    /**
     * Get img_src
     *
     * @return string
     */
    public function getImg_src()
    {
        return $this->img_src;
    }
}
