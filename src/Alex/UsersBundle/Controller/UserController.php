<?php

namespace Alex\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Alex\UsersBundle\Entity\User;
use Alex\UsersBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller {

    /**
     * Lists all User entities.
     *
     */
    public function indexAction() {

        return $this->redirect('edit');
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction() {
        $em = $this->getDoctrine()->getManager();

//        $entity = $em->getRepository('AlexUsersBundle:User')->find($id);
        $entity = $this->get('security.context')->getToken()->getUser();


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('AlexUsersBundle:User:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(User $entity) {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('users_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $id = $this->get('security.context')->getToken()->getUser()->getId();

        $entity = $em->getRepository('AlexUsersBundle:User')->find($id);
//        $entity = $this->get('security.context')->getToken()->getUser();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }


        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $password = $editForm->get('password')->getData();
            $factory = $this->container->get('security.encoder_factory');
            $encoder = $factory->getEncoder($entity);
            $encodedPassword = $encoder->encodePassword($password, $entity->getSalt());
            $entity->setPassword($encodedPassword);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_edit', array('id' => $id)));
        }

        return $this->render('AlexUsersBundle:User:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
        ));
    }

}
