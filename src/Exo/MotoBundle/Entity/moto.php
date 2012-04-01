<?php

namespace Exo\MotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Exo\MotoBundle\Entity\Piece;
use Exo\MotoBundle\Entity\Categorie;

/**
 * Exo\MotoBundle\Entity\moto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Exo\MotoBundle\Entity\motoRepository")
 */
class moto
{

    /**
     * @ORM\ManyToMany(targetEntity="Exo\MotoBundle\Entity\Piece")
     */
    private $pieces;

    public function __construct()
    {
        $this->pieces = new ArrayCollection();
    }

    public function getPiece()
    {
        return $this->pieces;
    }

    public function setPiece($piece)
    {
        $this->pieces[] = $piece;
    }
	
	/**
     * @ORM\OneToOne(targetEntity="Exo\MotoBundle\Entity\Categorie")
     */
    private $nom_categorie;

   
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
	
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string $moto
     *
     * @ORM\Column(name="moto", type="string", length=255)
     */
    private $moto;


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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set moto
     *
     * @param string $moto
     */
    public function setMoto($moto)
    {
        $this->moto = $moto;
    }

    /**
     * Get moto
     *
     * @return string 
     */
    public function getMoto()
    {
        return $this->moto;
    }
}