<?php

namespace Exo\MotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exo\MotoBundle\Entity\Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Exo\MotoBundle\Entity\CategorieRepository")
 */
class Categorie
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom_categorie
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255)
     */
    private $nom_categorie;


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
     * Set nom_categorie
     *
     * @param string $nomCategorie
     */
    public function setNomCategorie($nomCategorie)
    {
        $this->nom_categorie = $nomCategorie;
    }

    /**
     * Get nom_categorie
     *
     * @return string 
     */
    public function getNomCategorie()
    {
        return $this->nom_categorie;
    }
}