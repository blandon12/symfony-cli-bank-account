<?php
// src/AppBundle/Command/WithdrawFundsCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Controller\AccountManager;

class WithdrawFundsCommand extends ContainerAwareCommand {

  private $accountManager;

  public function __construct(AccountManager $accountManager)
  {
    $this->accountManager = $accountManager;
    parent::__construct();
  }

  protected function configure() {
    $this

    ->setName('app:withdraw-funds')

    ->setDescription('Description: Withdraw funds from the account given. Parameters: username, amount. Example: php bin/console app:withdraw-funds firstAccount 10')

    // configure an argument
    ->addArgument('username', InputArgument::REQUIRED, 'The username of the account.')
    ->addArgument('amount', InputArgument::REQUIRED, 'The amount to deposit.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    if ($this->accountManager->checkAccount($input->getArgument('username'))) {

      // Make sure the value of withdraw is negative.
      $withdraw = $input->getArgument('amount') * -1;
      $result = $this->accountManager->updateBalance($input->getArgument('username'), $withdraw);

      // If return TRUE, show the latest balance.
      if ($result) {
        $balance = $this->accountManager->displayBalance($input->getArgument('username'));
        $output->writeln("Your current balance is " . $balance . " GBP.");
      }
      else {
        // If return FALSE, it means the withdraw amount beyond current and overdraft.
        $output->writeln("Your withdraw can't be beyond your overdraft allowance.");
      }
    }
    else {
      $output->writeln("There is no account for " . $input->getArgument('username'));
    }
  }

}

