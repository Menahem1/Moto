<?php

namespace Exo\MotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exo\MotoBundle\Entity\Piece
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Exo\MotoBundle\Entity\PieceRepository")
 */
class Piece
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
     * @var string $nom_piece
     *
     * @ORM\Column(name="nom_piece", type="string", length=255)
     */
    private $nom_piece;


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
     * Set nom_piece
     *
     * @param string $nomPiece
     */
    public function setNomPiece($nomPiece)
    {
        $this->nom_piece = $nomPiece;
    }

    /**
     * Get nom_piece
     *
     * @return string 
     */
    public function getNomPiece()
    {
        return $this->nom_piece;
    }
}