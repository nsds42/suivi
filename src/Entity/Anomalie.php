<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnomalieRepository")
 */
class Anomalie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="integer", nullable=false, length=3)
     */
    private $numShp;

    /**
     * @ORM\Column(type="integer", nullable=true, length=10)
     */
    private $numOceane;

    /**
     * @ORM\Column(type="string", nullable=true, length=256)
     */
    private $description;

    /**
     * @ORM\Column(type="string", nullable=true, length=100)
     */
    private $versionAno;

    /**
     * @ORM\Column(type="string", nullable=true, length=20)
     */
    private $garantieVSR;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" : 0})
     */
    private $valReformulation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateReformulation;

    /**
     * @ORM\Column(type="string", nullable=true, length=3)
     */
    protected $developpeur;

    /**
     * @ORM\Column(type="string", nullable=true, length=100)
     */
    protected $versionCorrectif;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dateQualMOA;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $dateResolution;

    /**
     * @ORM\Column(type="string", nullable=true, length=256)
     */
    protected $commentaire;

    public function getDateCreation()
    {
      return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
      $this->dateCreation = $dateCreation;
    }

    public function getNumShp()
    {
      return $this->numShp;
    }

    public function setNumShp($numShp)
    {
      $this->numShp = $numShp;
    }

    public function getNumOceane()
    {
      return $this->numOceane;
    }

    public function setNumOceane($numOceane)
    {
      $this->numOceane = $numOceane;
    }

    public function getDescription()
    {
      return $this->description;
    }

    public function setDescription($description)
    {
      $this->description = $description;
    }

    public function getVersionAno()
    {
      return $this->versionAno;
    }

    public function setVersionAno($versionAno)
    {
      $this->versionAno = $versionAno;
    }

    public function getGarantieVSR()
    {
      return $this->garantieVSR;
    }

    public function setGarantieVSR($garantieVSR)
    {
      $this->garantieVSR = $garantieVSR;
    }

    public function getValReformulation()
    {
      return $this->valReformulation;
    }

    public function setValReformulation($valReformulation)
    {
      $this->valReformulation = $valReformulation;
    }

    public function getDateReformulation()
    {
      return $this->dateReformulation;
    }

    public function setDateReformulation($dateReformulation)
    {
      $this->dateReformulation = $dateReformulation;
    }

    public function getDeveloppeur()
    {
      return $this->developpeur;
    }

    public function setDeveloppeur($developpeur)
    {
      $this->developpeur = $developpeur;
    }

    public function getVersionCorrectif()
    {
      return $this->versionCorrectif;
    }

    public function setVersionCorrectif($versionCorrectif)
    {
      $this->versionCorrectif = $versionCorrectif;
    }

    public function getDateQualMOA()
    {
      return $this->dateQualMOA;
    }

    public function setDateQualMOA($dateQualMOA)
    {
      $this->dateQualMOA = $dateQualMOA;
    }

    public function getDateResolution()
    {
      return $this->dateResolution;
    }

    public function setDateResolution($dateResolution)
    {
      $this->dateResolution = $dateResolution;
    }

    public function getCommentaire()
    {
      return $this->commentaire;
    }

    public function setCommentaire($commentaire)
    {
      $this->commentaire = $commentaire;
    }
}
