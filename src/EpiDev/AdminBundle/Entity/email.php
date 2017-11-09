<?php

namespace EpiDev\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity(repositoryClass="EpiDev\AdminBundle\Repository\emailRepository")
 */
class email
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
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="agency", type="integer")
     */
     private $agency;

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
     * Set mail
     *
     * @param string $mail
     *
     * @return email
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set agency
     *
     * @param int $agency
     *
     * @return agency
     */
    public function setAgency($agency)
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * Get agency
     *
     * @return int
     */
    public function getAgency()
    {
        return $this->agency;
    }

}
