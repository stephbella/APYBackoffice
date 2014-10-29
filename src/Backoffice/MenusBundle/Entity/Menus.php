<?php

namespace Backoffice\MenusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Backoffice\MenusBundle\Entity\MenusRepository")
 */
class Menus
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
     * @ORM\Column(name="nom_menus", type="string", length=150)
     */
    private $nomMenus;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_menus", type="string", length=150)
     */
    private $slugMenus;

    /**
     * @var string
     *
     * @ORM\Column(name="ordre_menus", type="string", length=255)
     */
    private $ordreMenus;

    /**
     * @var integer
     *
     * @ORM\Column(name="niv_menus", type="smallint")
     */
    private $nivMenus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_activated_menus", type="boolean")
     */
    private $isActivatedMenus;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_crea_menus", type="date")
     */
    private $dateCreaMenus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif_menus", type="date")
     */
    private $dateModifMenus;


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
     * Set nomMenus
     *
     * @param string $nomMenus
     * @return Menus
     */
    public function setNomMenus($nomMenus)
    {
        $this->nomMenus = $nomMenus;

        return $this;
    }

    /**
     * Get nomMenus
     *
     * @return string 
     */
    public function getNomMenus()
    {
        return $this->nomMenus;
    }

    /**
     * Set slugMenus
     *
     * @param string $slugMenus
     * @return Menus
     */
    public function setSlugMenus($slugMenus)
    {
        $this->slugMenus = $slugMenus;

        return $this;
    }

    /**
     * Get slugMenus
     *
     * @return string 
     */
    public function getSlugMenus()
    {
        return $this->slugMenus;
    }

    /**
     * Set ordreMenus
     *
     * @param string $ordreMenus
     * @return Menus
     */
    public function setOrdreMenus($ordreMenus)
    {
        $this->ordreMenus = $ordreMenus;

        return $this;
    }

    /**
     * Get ordreMenus
     *
     * @return string 
     */
    public function getOrdreMenus()
    {
        return $this->ordreMenus;
    }

    /**
     * Set nivMenus
     *
     * @param integer $nivMenus
     * @return Menus
     */
    public function setNivMenus($nivMenus)
    {
        $this->nivMenus = $nivMenus;

        return $this;
    }

    /**
     * Get nivMenus
     *
     * @return integer 
     */
    public function getNivMenus()
    {
        return $this->nivMenus;
    }

    /**
     * Set isActivatedMenus
     *
     * @param boolean $isActivatedMenus
     * @return Contents
     */
    public function setisActivatedMenus($isActivatedMenus)
    {
        $this->isActivatedMenus = $isActivatedMenus;

        return $this;
    }

    /**
     * Get isActivatedMenus
     *
     * @return boolean 
     */
    public function getisActivatedMenus()
    {
        return $this->isActivatedMenus;
    }

    /**
     * Set dateCreaMenus
     *
     * @param \DateTime $dateCreaMenus
     * @return Menus
     */
    public function setDateCreaMenus($dateCreaMenus)
    {
        $this->dateCreaMenus = $dateCreaMenus;

        return $this;
    }

    /**
     * Get dateCreaMenus
     *
     * @return \DateTime 
     */
    public function getDateCreaMenus()
    {
        return $this->dateCreaMenus;
    }

    /**
     * Set dateModifMenus
     *
     * @param \DateTime $dateModifMenus
     * @return Menus
     */
    public function setDateModifMenus($dateModifMenus)
    {
        $this->dateModifMenus = $dateModifMenus;

        return $this;
    }

    /**
     * Get dateModifMenus
     *
     * @return \DateTime 
     */
    public function getDateModifMenus()
    {
        return $this->dateModifMenus;
    }
}
