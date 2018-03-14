<?php

namespace Admin\FormationBundle\Controller;

use Admin\FormationBundle\Entity\sous_Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Sous_service controller.
 *
 */
class sous_ServiceController extends Controller
{
    /**
     * Lists all sous_Service entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sous_Services = $em->getRepository('AdminFormationBundle:sous_Service')->findAll();

        return $this->render('sous_service/index.html.twig', array(
            'sous_Services' => $sous_Services,
        ));
    }

    /**
     * Creates a new sous_Service entity.
     *
     */
    public function newAction(Request $request)
    {
        $sous_Service = new Sous_service();
        $form = $this->createForm('Admin\FormationBundle\Form\sous_ServiceType', $sous_Service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sous_Service);
            $em->flush();

            return $this->redirectToRoute('sous_service_show', array('id' => $sous_Service->getId()));
        }

        return $this->render('sous_service/new.html.twig', array(
            'sous_Service' => $sous_Service,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sous_Service entity.
     *
     */
    public function showAction(sous_Service $sous_Service)
    {
        $deleteForm = $this->createDeleteForm($sous_Service);

        return $this->render('sous_service/show.html.twig', array(
            'sous_Service' => $sous_Service,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sous_Service entity.
     *
     */
    public function editAction(Request $request, sous_Service $sous_Service)
    {
        $deleteForm = $this->createDeleteForm($sous_Service);
        $editForm = $this->createForm('Admin\FormationBundle\Form\sous_ServiceType', $sous_Service);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sous_service_show', array('id' => $sous_Service->getId()));
        }

        return $this->render('sous_service/edit.html.twig', array(
            'sous_Service' => $sous_Service,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),));

    }

    /**
     * Deletes a sous_Service entity.
     *
     */
    public function deleteAction(Request $request, sous_Service $sous_Service)
    {
        $form = $this->createDeleteForm($sous_Service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sous_Service);
            $em->flush();
        }

        return $this->redirectToRoute('sous_service_index');
    }

    /**
     * Creates a form to delete a sous_Service entity.
     *
     * @param sous_Service $sous_Service The sous_Service entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(sous_Service $sous_Service)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sous_service_delete', array('id' => $sous_Service->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    /** Ceci pour la barre de recherche */
    public function rechercheAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $motcle=$request->get('motcle');
        $sous_Services = $em->getRepository('AdminFormationBundle:sous_Service')->findSousServiceBynom($motcle);

        return $this->render('sous_service/index.html.twig', array(
            'sous_Services' => $sous_Services,
        ));
    }
}
