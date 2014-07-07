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
        $filter = new \Alex\UsersBundle\Entity\Filter;
        $filter->setHospital_id($id);
        $patients =  $em->getRepository('AlexUsersBundle:Patient')->getPatients($filter);
                
//        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexUsersBundle:Hospital:show.html.twig', array(
            'entity'      => $entity,
            'patients'    => $patients,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    

   
}
