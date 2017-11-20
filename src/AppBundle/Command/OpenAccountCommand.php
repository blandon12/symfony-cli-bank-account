<?php
// src/AppBundle/Command/OpenAccountCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Controller\AccountManager;

class OpenAccountCommand extends ContainerAwareCommand {

  private $accountManager;

  public function __construct(AccountManager $accountManager) {
    $this->accountManager = $accountManager;
    parent::__construct();
  }

  protected function configure() {
    $this

    ->setName('app:open-account')

    // the short description shown while running "php bin/console list"
    ->setDescription('Description: Open a new account. Parameter: username. Example: php bin/console app:open-account firstAccount')

    // configure an argument
    ->addArgument('username', InputArgument::REQUIRED, 'The username of the account.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    // If the account doesn't exist, open a new account
    if (!$this->accountManager->checkAccount($input->getArgument('username'))) {
      $text = $this->accountManager->createAccount($input->getArgument('username'));
      $output->writeln($text);

      // Grab the initial account balance.
      $balance = $this->accountManager->displayBalance($input->getArgument('username'));
      $output->writeln("Your initial balance is £" . $balance);

      // Grab the initial account overdraft allowance.
      $overdraft = $this->accountManager->displayOverdraft($input->getArgument('username'));
      $output->writeln("Your initial overdraft is £" . $overdraft);
    }
    else {
      $output->writeln("The account for " . $input->getArgument('username') . " exists");
    }
  }

}

