<?php

namespace ContactBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ContactBundle\Entity\Contact;
use ContactBundle\Form\ContactType;

/**
 * Contact controller.
 */
class ContactController extends Controller
{
    /**
     * Lists all Contact entities.
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        if ($session->get('utilisateur') == null) {
            $session->getFlashBag()->add('info', 'Vous devez vous connecter !');
            return $this->redirectToRoute('authentification_connexion');
        }

        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->createQueryBuilder();

        $queryBuilder->select('contact')->from('ContactBundle:Contact', 'contact');

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('ContactBundle:Contact:index.html.twig', array(
            'pagination' => $pagination
        ));
    }

    /**
     * Creates a new Contact entity.
     */
    public function newAction(Request $request)
    {
        $session = $request->getSession();

        if ($session->get('utilisateur') == null) {
            $session->getFlashBag()->add('info', 'Vous devez vous connecter !');
            return $this->redirectToRoute('authentification_connexion');
        }

        $contact = new Contact();
        
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('contact_show', array('id' => $contact->getId()));
        }
        
        return $this->render('ContactBundle:Contact:new.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contact entity.
     */
    public function showAction(Contact $contact)
    {
        $session = $request->getSession();

        if ($session->get('utilisateur') == null) {
            $session->getFlashBag()->add('info', 'Vous devez vous connecter !');
            return $this->redirectToRoute('authentification_connexion');
        }

        $deleteForm = $this->createDeleteForm($contact);

        return $this->render('ContactBundle:Contact:show.html.twig', array(
            'contact' => $contact,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Contact entity.
     */
    public function editAction(Request $request, Contact $contact)
    {
        $session = $request->getSession();

        if ($session->get('utilisateur') == null) {
            $session->getFlashBag()->add('info', 'Vous devez vous connecter !');
            return $this->redirectToRoute('authentification_connexion');
        }

        $deleteForm = $this->createDeleteForm($contact);
        $editForm = $this->createForm(ContactType::class, $contact);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('contact_index');
        }

        return $this->render('ContactBundle:Contact:edit.html.twig', array(
            'contact' => $contact,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Contact entity.
     */
    public function deleteAction(Request $request, Contact $contact)
    {
        $session = $request->getSession();

        if ($session->get('utilisateur') == null) {
            $session->getFlashBag()->add('info', 'Vous devez vous connecter !');
            return $this->redirectToRoute('authentification_connexion');
        }
        
        $form = $this->createDeleteForm($contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contact);
            $em->flush();
        }

        return $this->redirectToRoute('contact_index');
    }

    /**
     * Creates a form to delete a Contact entity.
     *
     * @param Contact $contact The Contact entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contact $contact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contact_delete', array('id' => $contact->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
