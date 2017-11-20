<?php
// src/AppBundle/Command/DepositFundsCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Controller\AccountManager;

class DepositFundsCommand extends ContainerAwareCommand {

  private $accountManager;

  public function __construct(AccountManager $accountManager)
  {
    $this->accountManager = $accountManager;
    parent::__construct();
  }

  protected function configure() {
    $this

    ->setName('app:deposit-funds')

    ->setDescription('Description: Deposit funds to the account given. Parameters: username, amount. Example: php bin/console app:deposit-funds firstAccount 10')

    // configure an argument
    ->addArgument('username', InputArgument::REQUIRED, 'The username of the account.')
    ->addArgument('amount', InputArgument::REQUIRED, 'The amount to deposit.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    if ($this->accountManager->checkAccount($input->getArgument('username'))) {

      $this->accountManager->updateBalance($input->getArgument('username'), $input->getArgument('amount'));
      // After deposit funds, output the latest balance.
      $balance = $this->accountManager->displayBalance($input->getArgument('username'));
      $output->writeln("Your current balance is £" . $balance);
    }
    else {
      $output->writeln("There is no account for " . $input->getArgument('username'));
    }
  }

}

