<?php

namespace ProjetBundle\Controller;

use ProjetBundle\Entity\Motscles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Motscle controller.
 *
 */
class MotsclesController extends Controller
{
    /**
     * Lists all motscle entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $motscles = $em->getRepository('ProjetBundle:Motscles')->findAll();

        return $this->render('motscles/index.html.twig', array(
            'motscles' => $motscles,
        ));
    }

    /**
     * Creates a new motscle entity.
     *
     */
    public function newAction(Request $request)
    {
        $motscle = new Motscles();
        $form = $this->createForm('ProjetBundle\Form\MotsclesType', $motscle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($motscle);
            $em->flush();

            return $this->redirectToRoute('motscles_show', array('idMotsCles' => $motscle->getIdmotscles()));
        }

        return $this->render('motscles/new.html.twig', array(
            'motscle' => $motscle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a motscle entity.
     *
     */
    public function showAction(Motscles $motscle)
    {
        $deleteForm = $this->createDeleteForm($motscle);

        return $this->render('motscles/show.html.twig', array(
            'motscle' => $motscle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing motscle entity.
     *
     */
    public function editAction(Request $request, Motscles $motscle)
    {
        $deleteForm = $this->createDeleteForm($motscle);
        $editForm = $this->createForm('ProjetBundle\Form\MotsclesType', $motscle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('motscles_edit', array('idMotsCles' => $motscle->getIdmotscles()));
        }

        return $this->render('motscles/edit.html.twig', array(
            'motscle' => $motscle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a motscle entity.
     *
     */
    public function deleteAction(Request $request, Motscles $motscle)
    {
        $form = $this->createDeleteForm($motscle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($motscle);
            $em->flush();
        }

        return $this->redirectToRoute('motscles_index');
    }

    /**
     * Creates a form to delete a motscle entity.
     *
     * @param Motscles $motscle The motscle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Motscles $motscle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('motscles_delete', array('idMotsCles' => $motscle->getIdmotscles())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
