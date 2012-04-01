<?php

namespace Exo\MotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Exo\MotoBundle\Entity\Moto;
use Exo\MotoBundle\Form\MotoType;
use Exo\MotoBundle\Form\MotoHandler;

class MotoController extends Controller
{
    
    public function indexAction()
    {
        $moto = $this->getDoctrine()->getEntityManager()->getRepository('ExoMotoBundle:moto')->getMotoWithCategorie();
    
		return $this->render('ExoMotoBundle:Moto:index.html.twig', array(
        'moto' => $moto
		));
    }
	
	public function ajouterAction($id)
	{
		if($id == "add")
		{
		$moto = new Moto;
        $form        = $this->createForm(new MotoType, $moto);
        $formHandler = new MotoHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());

		}else{
		
		$em = $this->getDoctrine()->getEntityManager();
		if( !$motoup = $em->getRepository('ExoMotoBundle:Moto')->find($id) )
		{
			throw $this->createNotFoundException('Moto [id='.$id.'] inexistante');
		}
        $form        = $this->createForm(new MotoType, $motoup);
        $formHandler = new MotoHandler($form, $this->get('request'), $em);
		}
		
        if($formHandler->process())
        {
            return $this->redirect( $this->generateUrl('moto_accueil') );
        }

        return $this->render('ExoMotoBundle:Moto:add.html.twig', array(
            'form' => $form->createView(),
        ));
		
	}
	
	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		if( !$motodel = $em->getRepository('ExoMotoBundle:Moto')->find($id) )
		{
			throw $this->createNotFoundException('Moto [id='.$id.'] inexistante');
		}
		$em->remove($motodel);
		$em->flush();
		return $this->redirect( $this->generateUrl('moto_accueil') );
	}
}
