<?php

namespace Alex\UsersBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Alex\UsersBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class UserAdmin extends Admin {

    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'created_at'
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('username')
                ->add('password', 'repeated', array('type' => 'password', 'first_name' => 'Password', 'second_name' => 'RetypePassword'))
                ->add('name')
                ->add('is_admin')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('username')
                ->add('name')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('username')
                ->add('password')
                ->addIdentifier('name')
                ->add('is_admin')
                ->add('created_at')
                ->add('updated_at')
        ;
    }

    protected function configureShowField(ShowMapper $showMapper) {
        $showMapper
                ->add('username')
                ->add('password')
                ->add('name')
                ->add('is_admin')
                ->add('created_at')
                ->add('updated_at')
        ;
    }

}
