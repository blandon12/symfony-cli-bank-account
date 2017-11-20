<?php
// src/AppBundle/Command/DisplayBalanceCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Controller\AccountManager;

class DisplayBalanceCommand extends ContainerAwareCommand {

  private $accountManager;

  public function __construct(AccountManager $accountManager)
  {
    $this->accountManager = $accountManager;
    parent::__construct();
  }

  protected function configure() {
    $this

    ->setName('app:display-balance')

    ->setDescription('Description: Display the balance of the account given. Parameters: username. Example: php bin/console app:display-balance firstAccount')

    // configure an argument
    ->addArgument('username', InputArgument::REQUIRED, 'The username of the account.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    if ($this->accountManager->checkAccount($input->getArgument('username'))) {
      $balance = $this->accountManager->displayBalance($input->getArgument('username'));
      $output->writeln("Your current balance is £" . $balance);
    }
    else {
      $output->writeln("There is no account for " . $input->getArgument('username'));
    }
  }

}

