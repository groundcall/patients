<?php

namespace Alex\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlexUsersBundle:Default:index.html.twig', array('name' => $name));
    }
}
