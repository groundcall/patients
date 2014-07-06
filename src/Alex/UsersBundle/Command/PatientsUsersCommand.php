<?php

namespace Alex\UsersBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Alex\UsersBundle\Entity\User;

class PatientsUsersCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('alex:patients:users')
                ->setDescription('Add Patients-manager users')
                ->addArgument('username', InputArgument::REQUIRED, 'The username')
                ->addArgument('password', InputArgument::REQUIRED, 'The password')
                ->addArgument('name', InputArgument::REQUIRED, 'The name')
                ->addArgument('is_admin', InputArgument::REQUIRED, 'The is admin')


        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
        $name = $input->getArgument('name');
        $is_admin = $input->getArgument('is_admin');


        $em = $this->getContainer()->get('doctrine')->getManager();

        $user = new User();
        $user->setUsername($username);
        $user->setName($name);
        $user->setIsAdmin($is_admin);
        // encode the password
        $factory = $this->getContainer()->get('security.encoder_factory');
        $encoder = $factory->getEncoder($user);
        $encodedPassword = $encoder->encodePassword($password, $user->getSalt());
        $user->setPassword($encodedPassword);
        $em->persist($user);
        $em->flush();

        $output->writeln(sprintf('Added %s user with password %s', $username, $password));
    }

}
