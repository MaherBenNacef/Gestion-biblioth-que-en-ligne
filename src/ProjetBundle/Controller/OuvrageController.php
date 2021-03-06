<?php

namespace ProjetBundle\Controller;

use ProjetBundle\Entity\Ouvrage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ouvrage controller.
 *
 */
class OuvrageController extends Controller
{
    /**
     * Lists all ouvrage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ouvrages = $em->getRepository('ProjetBundle:Ouvrage')->findAll();

        return $this->render('ouvrage/index.html.twig', array(
            'ouvrages' => $ouvrages,
        ));
    }

    /**
     * Creates a new ouvrage entity.
     *
     */
    public function newAction(Request $request)
    {
        $ouvrage = new Ouvrage();
        $form = $this->createForm('ProjetBundle\Form\OuvrageType', $ouvrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ouvrage);
            $em->flush();

            return $this->redirectToRoute('ouvrage_show', array('idOuvrage' => $ouvrage->getIdouvrage()));
        }

        return $this->render('ouvrage/new.html.twig', array(
            'ouvrage' => $ouvrage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ouvrage entity.
     *
     */
    public function showAction(Ouvrage $ouvrage)
    {
        $deleteForm = $this->createDeleteForm($ouvrage);

        return $this->render('ouvrage/show.html.twig', array(
            'ouvrage' => $ouvrage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ouvrage entity.
     *
     */
    public function editAction(Request $request, Ouvrage $ouvrage)
    {
        $deleteForm = $this->createDeleteForm($ouvrage);
        $editForm = $this->createForm('ProjetBundle\Form\OuvrageType', $ouvrage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ouvrage_edit', array('idOuvrage' => $ouvrage->getIdouvrage()));
        }

        return $this->render('ouvrage/edit.html.twig', array(
            'ouvrage' => $ouvrage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ouvrage entity.
     *
     */
    public function deleteAction(Request $request, Ouvrage $ouvrage)
    {
        $form = $this->createDeleteForm($ouvrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ouvrage);
            $em->flush();
        }

        return $this->redirectToRoute('ouvrage_index');
    }

    /**
     * Creates a form to delete a ouvrage entity.
     *
     * @param Ouvrage $ouvrage The ouvrage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ouvrage $ouvrage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ouvrage_delete', array('idOuvrage' => $ouvrage->getIdouvrage())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
