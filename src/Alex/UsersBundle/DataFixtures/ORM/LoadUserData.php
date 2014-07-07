<?php

namespace Alex\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Alex\UsersBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface {

    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $em) {

        $user = new User();
        $user->setName('Simple User');
        $user->setUsername('user');
        $password = ('user');
        $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 5000);
        $encodedPassword = $encoder->encodePassword($password, $user->getSalt());
        $user->setPassword($encodedPassword);
        $user->setIsAdmin(false);

        $admin = new User();
        $admin->setName('Administrator Website');
        $admin->setUsername('admin');
        $password = ('admin');
        $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 5000);
        $encodedPassword = $encoder->encodePassword($password, $admin->getSalt());
        $admin->setPassword($encodedPassword);
        $admin->setIsAdmin(true);

        $em->persist($user);
        $em->persist($admin);
        $em->flush();
    }

    public function getOrder() {
        return 3; // the order in which fixtures will be loaded
    }

}
