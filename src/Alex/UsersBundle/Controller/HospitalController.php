<?php

namespace Alex\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Alex\UsersBundle\Entity\Hospital;
use Alex\UsersBundle\Form\HospitalType;

/**
 * Hospital controller.
 *
 */
class HospitalController extends Controller
{

    /**
     * Lists all Hospital entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AlexUsersBundle:Hospital')->findAll();

        return $this->render('AlexUsersBundle:Hospital:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hospital entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hospital();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hospital_show', array('id' => $entity->getId())));
        }

        return $this->render('AlexUsersBundle:Hospital:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hospital entity.
     *
     * @param Hospital $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hospital $entity)
    {
        $form = $this->createForm(new HospitalType(), $entity, array(
            'action' => $this->generateUrl('hospital_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hospital entity.
     *
     */
    public function newAction()
    {
        $entity = new Hospital();
        $form   = $this->createCreateForm($entity);

        return $this->render('AlexUsersBundle:Hospital:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hospital entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexUsersBundle:Hospital')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hospital entity.');
        }
        
        $patients =  $em->getRepository('AlexUsersBundle:Patient')->getPatients($id);
                
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexUsersBundle:Hospital:show.html.twig', array(
            'entity'      => $entity,
            'patients'    => $patients,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hospital entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexUsersBundle:Hospital')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hospital entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexUsersBundle:Hospital:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hospital entity.
    *
    * @param Hospital $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hospital $entity)
    {
        $form = $this->createForm(new HospitalType(), $entity, array(
            'action' => $this->generateUrl('hospital_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hospital entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexUsersBundle:Hospital')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hospital entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hospital_edit', array('id' => $id)));
        }

        return $this->render('AlexUsersBundle:Hospital:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hospital entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AlexUsersBundle:Hospital')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hospital entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hospital'));
    }

    /**
     * Creates a form to delete a Hospital entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hospital_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
