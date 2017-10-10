<?php

namespace EpiDev\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actuality
 *
 * @ORM\Table(name="actuality")
 * @ORM\Entity(repositoryClass="EpiDev\AdminBundle\Repository\ActualityRepository")
 */
class Actuality
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="img_id", type="string", length=255)
     */
    private $img_id;

    /**
     * @var string
     *
     * @ORM\Column(name="img_name", type="string", length=255)
     */
    private $img_name;


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
     * @return Actuality
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Actuality
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Actuality
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set img_id
     *
     * @param string $img_id
     *
     * @return Actuality
     */
    public function setImgId($img_id)
    {
        $this->img_id = $img_id;

        return $this;
    }

    /**
     * Get img_id
     *
     * @return string
     */
    public function getImgId()
    {
        return $this->img_id;
    }

    /**
     * Set img_name
     *
     * @param string $img_name
     *
     * @return Actuality
     */
    public function setImgName($img_name)
    {
        $this->img_name = $img_name;

        return $this;
    }

    /**
     * Get img_name
     *
     * @return string
     */
    public function getImgName()
    {
        return $this->img_name;
    }
}
