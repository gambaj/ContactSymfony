<?php

namespace AuthentificationBundle\Controller;

use AuthentificationBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class AuthentificationController extends Controller
{
    public function inscriptionAction(Request $request)
    {
    	$session = $request->getSession();
    	$utilisateur = new Utilisateur();

    	$formBuilder = $this->createFormBuilder($utilisateur);

	    $formBuilder
	      ->add('pseudo',      TextType::class, array('label' => 'Pseudo'))
	      ->add('password',     PasswordType::class, array('label' => 'Mot de passe'))
	      ->add('save',      SubmitType::class, array('label' => 'Ajouter'))
	    ;

    	$form = $formBuilder->getForm();
    	$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        	
            $em = $this->getDoctrine()->getManager();
            $repositoryUtilisateur = $em->getRepository('AuthentificationBundle:Utilisateur');

            $utilisateurBase = $repositoryUtilisateur->findBy(array('pseudo' => $utilisateur->getPseudo()));

            
            if (count($utilisateurBase) === 1) {
                $session->getFlashBag()->add('info', 'Le pseudo est déjà utilisé !');
                return $this->redirectToRoute('authentification_inscription');
            }

            $em->persist($utilisateur);
            $em->flush();
            
            $session->getFlashBag()->add('info', 'Le compte a bien été crée !');
            return $this->redirectToRoute('authentification_connexion');
        }

	    return $this->render('AuthentificationBundle:Authentification:inscription.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }

    public function connexionAction(Request $request)
    {
        $session = $request->getSession();
        $utilisateur = new Utilisateur();

        $formBuilder = $this->createFormBuilder($utilisateur);

        $formBuilder
          ->add('pseudo',      TextType::class, array('label' => 'Pseudo'))
          ->add('password',     PasswordType::class, array('label' => 'Mot de passe'))
          ->add('save',      SubmitType::class, array('label' => 'Connexion'))
        ;

        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $repositoryUtilisateur = $em->getRepository('AuthentificationBundle:Utilisateur');

            $utilisateurBase = $repositoryUtilisateur->findBy(array('pseudo' => $utilisateur->getPseudo(),'password' => $utilisateur->getPassword()));

            
            if (count($utilisateurBase) === 0) {
                $session->getFlashBag()->add('info', 'Pseudo ou mot de passe incorrect !');
                return $this->render('AuthentificationBundle:Authentification:connexion.html.twig', array(
                  'form' => $form->createView(),
                ));
            } 

            $session->set('utilisateur', $utilisateur->getPseudo());
            return $this->redirectToRoute('contact_index');
        }

    	return $this->render('AuthentificationBundle:Authentification:connexion.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    public function deconnexionAction(Request $request)
    {
        $session = $request->getSession();
        $session->remove('utilisateur');
        return $this->redirectToRoute('authentification_connexion');
    }
}
