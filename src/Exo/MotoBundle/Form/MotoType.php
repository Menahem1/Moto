<?php

namespace Exo\MotoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class MotoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('nom')
            ->add('prenom')
            ->add('nom_Categorie', 'entity', array(
												'class' => 'ExoMotoBundle:Categorie',
												'property' => 'nom_categorie',
											))
            ->add('moto')
            ->add('piece', 'entity', array(
												'class' => 'ExoMotoBundle:Piece',
												'property' => 'nom_piece',
												'multiple' => true,
											))
            ;
    }

    public function getName()
    {
        return 'exo_motobundle_mototype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Exo\MotoBundle\Entity\Moto'
        );
    }
}