<?php

namespace ProjetBundle\Controller;

use ProjetBundle\Entity\Telechargement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Telechargement controller.
 *
 */
class TelechargementController extends Controller
{
    /**
     * Lists all telechargement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $telechargements = $em->getRepository('ProjetBundle:Telechargement')->findAll();

        return $this->render('telechargement/index.html.twig', array(
            'telechargements' => $telechargements,
        ));
    }

    /**
     * Creates a new telechargement entity.
     *
     */
    public function newAction(Request $request)
    {
        $telechargement = new Telechargement();
        $form = $this->createForm('ProjetBundle\Form\TelechargementType', $telechargement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($telechargement);
            $em->flush();

            return $this->redirectToRoute('telechargement_show', array('idTelechargement' => $telechargement->getIdtelechargement()));
        }

        return $this->render('telechargement/new.html.twig', array(
            'telechargement' => $telechargement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a telechargement entity.
     *
     */
    public function showAction(Telechargement $telechargement)
    {
        $deleteForm = $this->createDeleteForm($telechargement);

        return $this->render('telechargement/show.html.twig', array(
            'telechargement' => $telechargement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing telechargement entity.
     *
     */
    public function editAction(Request $request, Telechargement $telechargement)
    {
        $deleteForm = $this->createDeleteForm($telechargement);
        $editForm = $this->createForm('ProjetBundle\Form\TelechargementType', $telechargement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('telechargement_edit', array('idTelechargement' => $telechargement->getIdtelechargement()));
        }

        return $this->render('telechargement/edit.html.twig', array(
            'telechargement' => $telechargement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a telechargement entity.
     *
     */
    public function deleteAction(Request $request, Telechargement $telechargement)
    {
        $form = $this->createDeleteForm($telechargement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($telechargement);
            $em->flush();
        }

        return $this->redirectToRoute('telechargement_index');
    }

    /**
     * Creates a form to delete a telechargement entity.
     *
     * @param Telechargement $telechargement The telechargement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Telechargement $telechargement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('telechargement_delete', array('idTelechargement' => $telechargement->getIdtelechargement())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
