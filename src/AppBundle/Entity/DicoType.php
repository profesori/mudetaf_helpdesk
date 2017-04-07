<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoType
 *
 * @ORM\Table(name="dico_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DicoTypeRepository")
 */
class DicoType
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
     * @ORM\Column(name="typeLibelle", type="string", length=255)
     */
    private $typeLibelle;

    /**
    * @ORM\OneToMany(targetEntity="Dico", mappedBy="dicotype")
    */
   private $dicos;


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
     * Set typeLibelle
     *
     * @param string $typeLibelle
     *
     * @return DicoType
     */
    public function setTypeLibelle($typeLibelle)
    {
        $this->typeLibelle = $typeLibelle;

        return $this;
    }

    /**
     * Get typeLibelle
     *
     * @return string
     */
    public function getTypeLibelle()
    {
        return $this->typeLibelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dicos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dico
     *
     * @param \AppBundle\Entity\Dico $dico
     *
     * @return DicoType
     */
    public function addDico(\AppBundle\Entity\Dico $dico)
    {
        $this->dicos[] = $dico;

        return $this;
    }

    /**
     * Remove dico
     *
     * @param \AppBundle\Entity\Dico $dico
     */
    public function removeDico(\AppBundle\Entity\Dico $dico)
    {
        $this->dicos->removeElement($dico);
    }

    /**
     * Get dicos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDicos()
    {
        return $this->dicos;
    }
}
