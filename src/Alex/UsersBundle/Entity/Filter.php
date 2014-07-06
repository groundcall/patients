<?php

namespace Alex\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hospital
 */
class Filter {
   
    private $name;
    private $hospital_id;
    
    public function getName() {
        return $this->name;
    }

    public function getHospital_id() {
        return $this->hospital_id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setHospital_id($hospital_id) {
        $this->hospital_id = $hospital_id;
    }



}
