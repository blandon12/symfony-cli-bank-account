<?php
// src/AppBundle/Command/ApplyOverdraftCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Controller\AccountManager;

class ApplyOverdraftCommand extends ContainerAwareCommand {

  private $accountManager;

  public function __construct(AccountManager $accountManager) {
    $this->accountManager = $accountManager;
    parent::__construct();
  }

  protected function configure() {
    $this

    ->setName('app:apply-overdraft')

    ->setDescription('Description: Apply overdraft for an account. Parameter: username. Example: php bin/console app:apply-overdraft firstAccount')

    // configure an argument
    ->addArgument('username', InputArgument::REQUIRED, 'The username of the account.')

    ->addArgument('amount', InputArgument::REQUIRED, 'The amount to apply overdraft.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    $this->accountManager->updateOverdraft($input->getArgument('username'), $input->getArgument('amount'));
    $overdraft = $this->accountManager->displayOverdraft($input->getArgument('username'));
    $output->writeln("Your current overdraft allowance is £" . $overdraft);
  }

}

