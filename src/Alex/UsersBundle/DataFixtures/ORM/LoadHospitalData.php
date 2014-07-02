<?php

namespace Alex\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Alex\UsersBundle\Entity\Hospital;

class LoadHospitalData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $em) {
        $hospital_1 = new Hospital();
        $hospital_1->setName('Spitalul Clinic de Urgenta');
        $hospital_1->setAddress('Str. Constanta, 5, Cluj-Napoca, Cluj, 400158');
        $hospital_1->setPhone('+40 264 596 414');

        $hospital_2 = new Hospital();
        $hospital_2->setName('Spitalul Militar');
        $hospital_2->setAddress('Strada General Traian Moșoiu 22, Cluj-Napoca');
        $hospital_2->setPhone('+40 264 598 381');

        $hospital_3 = new Hospital();
        $hospital_3->setName('Centrul Regional De Transfuzii Sanguine');
        $hospital_3->setAddress('Str. Balcescu Nicolae, 18, Cluj-Napoca, Cluj, 400160');
        $hospital_3->setPhone('+40 264 597 120');

        $hospital_4 = new Hospital();
        $hospital_4->setName('Spitalul Clinic de Recuperare');
        $hospital_4->setAddress('Str. Viilor, 46-50, Cluj-Napoca, Cluj, 400336');
        $hospital_4->setPhone('+40 264 523 066');

        $hospital_5 = new Hospital();
        $hospital_5->setName('Institutul Inimii');
        $hospital_5->setAddress('Calea Moților 19-21, Cluj-Napoca, 400001');
        $hospital_5->setPhone('+40 264 591 941');

        $em->persist($hospital_1);
        $em->persist($hospital_2);
        $em->persist($hospital_3);
        $em->persist($hospital_4);
        $em->persist($hospital_5);
        $em->flush();
        
        $this->addReference('0', $hospital_1);
        $this->addReference('1', $hospital_2);
        $this->addReference('2', $hospital_3);
        $this->addReference('3', $hospital_4);
        $this->addReference('4', $hospital_5);
        
    }

    public function getOrder() {
        return 1; // the order in which fixtures will be loaded
    }

}
