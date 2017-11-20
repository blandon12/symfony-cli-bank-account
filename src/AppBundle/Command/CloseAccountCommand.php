<?php
// src/AppBundle/Command/CloseAccountCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Controller\AccountManager;

class CloseAccountCommand extends ContainerAwareCommand {

  private $accountManager;

  public function __construct(AccountManager $accountManager) {
    $this->accountManager = $accountManager;
    parent::__construct();
  }

  protected function configure() {
    $this

    ->setName('app:close-account')

    ->setDescription('Description: Close an account. Parameter: username. Example: php bin/console app:close-account firstAccount')

    // configure an argument
    ->addArgument('username', InputArgument::REQUIRED, 'The username of the account.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    $text = $this->accountManager->closeAccount($input->getArgument('username'));
    $output->writeln($text);
  }

}

