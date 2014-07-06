<?php

namespace Alex\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Alex\UsersBundle\Entity\Patient;
use Alex\UsersBundle\Form\PatientType;
use Alex\UsersBundle\Form\FilterType;

/**
 * Patient controller.
 *
 */
class PatientController extends Controller {

    /**
     * Lists all Patient entities.
     *
     */
    public function indexAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $filter = new \Alex\UsersBundle\Entity\Filter;

        if ($request->query->get('name')) {
            $filter->setName($request->query->get('name'));
        }
        if ($request->query->get('hospital_id')) {
            $filter->setHospital_id($request->query->get('hospital_id'));
        }else{
             $filter->setHospital_id($request->query->get('hospital_id'));
        }

        $entities = $em->getRepository('AlexUsersBundle:Patient')->getPatients($filter);
        $hospitals = $em->getRepository('AlexUsersBundle:Hospital')->findall($filter);

        return $this->render('AlexUsersBundle:Patient:index.html.twig', array(
                    'entities' => $entities,
                    'hospitals' => $hospitals,
                    'filter' => $filter,
        ));
    }

    /**
     * Creates a new Patient entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Patient();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('patients_show', array('id' => $entity->getId())));
        }

        return $this->render('AlexUsersBundle:Patient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Patient entity.
     *
     * @param Patient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Patient $entity) {
        $form = $this->createForm(new PatientType(), $entity, array(
            'action' => $this->generateUrl('patients_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Patient entity.
     *
     */
    public function newAction() {
        $entity = new Patient();
        $form = $this->createCreateForm($entity);

        return $this->render('AlexUsersBundle:Patient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Patient entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexUsersBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexUsersBundle:Patient:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Patient entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexUsersBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexUsersBundle:Patient:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Patient entity.
     *
     * @param Patient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Patient $entity) {
        $form = $this->createForm(new PatientType(), $entity, array(
            'action' => $this->generateUrl('patients_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Patient entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexUsersBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('patients_edit', array('id' => $id)));
        }

        return $this->render('AlexUsersBundle:Patient:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Patient entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AlexUsersBundle:Patient')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Patient entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('patients'));
    }

    /**
     * Creates a form to delete a Patient entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('patients_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
