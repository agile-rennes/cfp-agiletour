<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session.
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SessionRepository")
 */
class Session
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity=AppBundle\Entity\Format::class, inversedBy="sessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="format_id", referencedColumnName="id")
     * })
     */
    private $format;
    /**
     * @ORM\ManyToOne(targetEntity=AppBundle\Entity\Orateur::class, inversedBy="sessions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orateur_id", referencedColumnName="id")
     * })
     */
    private $orateur;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set titre.
     *
     * @param string $titre
     *
     * @return Session
     */
    public function setTitre($titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set format.
     *
     * @param string $format
     *
     * @return Session
     */
    public function setFormat($format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format.
     *
     * @return string
     */
    public function getFormat(): ?Format
    {
        return $this->format;
    }

    /**
     * @return mixed
     */
    public function getOrateur(): ?Orateur
    {
        return $this->orateur;
    }

    /**
     * @param mixed $orateur
     *
     * @return Session
     */
    public function setOrateur($orateur)
    {
        $this->orateur = $orateur;

        return $this;
    }
}
