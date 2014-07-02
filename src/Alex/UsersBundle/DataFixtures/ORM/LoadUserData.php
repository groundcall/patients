<?php

namespace Alex\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Alex\UsersBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $em) {
        
        $user = new User();
        $user->setName('Simple User');
        $user->setUsername('user');
        $user->setPassword('123456');
        $user->setIsAdmin(false);
        
        $admin = new User();
        $admin->setName('Administrator Website');
        $admin->setUsername('admin');
        $admin->setPassword('123456');
        $admin->setIsAdmin(true);

        $em->persist($user);
        $em->persist($admin);
        $em->flush();
        
    }

    public function getOrder() {
        return 3; // the order in which fixtures will be loaded
    }

}
