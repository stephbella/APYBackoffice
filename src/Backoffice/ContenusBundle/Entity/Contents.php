<?php

namespace Backoffice\ContenusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contents
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Backoffice\ContenusBundle\Entity\ContentsRepository")
 */
class Contents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_contents", type="string", length=255)
     */
    private $nomContents;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_contents", type="string", length=255)
     */
    private $slugContents;

    /**
     * @var string
     *
     * @ORM\Column(name="descript_contents", type="text")
     */
    private $descriptContents;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_activated_contents", type="boolean")
     */
    private $isActivatedContents;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_menus_contents", type="integer")
     */
    private $idMenusContents;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_crea_contents", type="date")
     */
    private $dateCreaContents;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif_contents", type="date")
     */
    private $dateModifContents;

    public function __construct()
    {
        $this->nomContents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->descriptContents = "";
        $this->slugContents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isActivatedContents = true;
        $this->idMenusContents = 0;
        $this->dateCreaContents = new \Datetime();
        $this->dateModifContents = new \Datetime();
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomContents
     *
     * @param string $nomContents
     * @return Contents
     */
    public function setNomContents($nomContents)
    {
        $this->nomContents = $nomContents;

        return $this;
    }

    /**
     * Get nomContents
     *
     * @return string 
     */
    public function getNomContents()
    {
        return $this->nomContents;
    }

    /**
     * Set slugContents
     *
     * @param string $slugContents
     * @return Contents
     */
    public function setSlugContents($slugContents)
    {
        $this->slugContents = $slugContents;

        return $this;
    }

    /**
     * Get slugContents
     *
     * @return string 
     */
    public function getSlugContents()
    {
        return $this->slugContents;
    }

    /**
     * Set descriptContents
     *
     * @param string $descriptContents
     * @return Contents
     */
    public function setDescriptContents($descriptContents)
    {
        $this->descriptContents = $descriptContents;

        return $this;
    }

    /**
     * Get descriptContents
     *
     * @return string 
     */
    public function getDescriptContents()
    {
        return $this->descriptContents;
    }

    /**
     * Set isActivatedMenus
     *
     * @param boolean $isActivatedContents
     * @return Contents
     */
    public function setisActivatedContents($isActivatedContents)
    {
        $this->isActivatedContents = $isActivatedContents;

        return $this;
    }

    /**
     * Get isActivatedContents
     *
     * @return boolean 
     */
    public function getisActivatedContents()
    {
        return $this->isActivatedContents;
    }

    /**
     * Set idMenusContents
     *
     * @param integer $idMenusContents
     * @return Contents
     */
    public function setIdMenusContents($idMenusContents)
    {
        $this->idMenusContents = $idMenusContents;

        return $this;
    }

    /**
     * Get idMenusContents
     *
     * @return integer 
     */
    public function getIdMenusContents()
    {
        return $this->idMenusContents;
    }

    /**
     * Set dateCreaContents
     *
     * @param \DateTime $dateCreaContents
     * @return Contents
     */
    public function setDateCreaContents($dateCreaContents)
    {
        $this->dateCreaContents = $dateCreaContents;

        return $this;
    }

    /**
     * Get dateCreaContents
     *
     * @return \DateTime 
     */
    public function getDateCreaContents()
    {
        return $this->dateCreaContents;
    }

    /**
     * Set dateModifContents
     *
     * @param \DateTime $dateModifContents
     * @return Contents
     */
    public function setDateModifContents($dateModifContents)
    {
        $this->dateModifContents = $dateModifContents;

        return $this;
    }

    /**
     * Get dateModifContents
     *
     * @return \DateTime 
     */
    public function getDateModifContents()
    {
        return $this->dateModifContents;
    }
}
