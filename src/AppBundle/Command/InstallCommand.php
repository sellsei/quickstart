<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\BufferedOutput;

class InstallCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('sellsei:quickstart-install')
            ->setDescription('Install Sellsei Quickstart')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Installing Sellsei Quickstart ...</info>');

        $output->writeln('<comment>Step 1 of 3:</comment> <info>Installing assets.</info>');
        $command = $this->getApplication()->find('assets:install');
        $command->run(new ArrayInput(array("command" => "assets:install")), new BufferedOutput());

        $output->writeln('<comment>Step 2 of 3:</comment> <info>Dumping routes.</info>');
        $command = $this->getApplication()->find('fos:js-routing:dump');
        $command->run(new ArrayInput(array("command" => "fos:js-routing:dump")), new BufferedOutput());

        $output->writeln('<comment>Step 3 of 3:</comment> <info>Installing assets.</info>');
        $command = $this->getApplication()->find('fos:js-routing:dump');
        $command->run(new ArrayInput(array("command" => "fos:js-routing:dump")), new BufferedOutput());

        $output->writeln('<info>Sellsei Quickstart has been successfully installed.</info>');
    }
}
