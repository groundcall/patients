<?php

namespace Alex\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Alex\UsersBundle\Entity\Patient;

class LoadPatientData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $em) {
        for ($i = 1; $i <= 100; $i++) {
            $patient = new Patient();
            $patient->setHospital($em->merge($this->getReference($i % 5)));
            $patient->setAddress('Bulevardul 21 Decembrie, nr.' . $i);
            $patient->setBirthdate(new \DateTime('1989-08-02 17:45:00'));
            $patient->setName('Alexandru'.$i.' Butnar'.$i*7);
            $patient->setPhone('+40740369'.$i*2);
            

            $em->persist($patient);
        }
        $em->flush();
    }

    public function getOrder() {
        return 2; // the order in which fixtures will be loaded
    }

}
