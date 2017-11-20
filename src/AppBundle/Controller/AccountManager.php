<?php

// src/AppBundle/Controller/AccountManagerTest.php
namespace AppBundle\Controller;

use Symfony\Component\Filesystem\Filesystem;

class AccountManager {

  /**
   * Create a new account for the username given.
   * @param $username
   * @return mixed
   */
  public function createAccount($username) {
    // Build object for the new account to create.
    $myAccount = new \stdClass();
    $myAccount->username = $username;
    $myAccount->balance = 0;
    $myAccount->overdraft = 0;

    try {
      // Create a JSON file to store the account details.
      $json = json_encode($myAccount);
      $this->storeJson($username, $json);
      $message = 'Congratulations! New account for ' . $username . ' has been created!';
      return $message;
    }
    catch (IOException $e) {
      return $e->errorMessage();
    }
  }

  /**
   * Create a new JSON file and write data into it.
   * @param $username
   * @param $json
   * @return IOException|\Exception
   */
  private function storeJson($username, $json) {
    $fs = new Filesystem();
    try {
      $fs->dumpFile('/tmp/account/' . $username . '.json', $json);
    }
    catch(IOException $e) {
      return $e;
    }
  }

  /**
   * Update the balance in JSON with the amount given in the parameter.
   * @param $username
   * @param $amount
   * @return bool
   */
  public function updateBalance($username, $amount) {
    if ($this->checkAccount($username)) {
      $current_balance = $this->displayBalance($username);
      $overdraft = $this->displayOverdraft($username);

      // If $amount is more than or equal to 0, it means depositing funds.
      // If $amount is less then 0, it means withdraw funds. the amount withdraw can't be
      // more than the sum of balance and overdraft.
      if ($amount >= 0 || ($amount < 0 && $current_balance + $overdraft >= $amount * -1)) {
        $myAccount = new \stdClass();
        $myAccount->username = $username;
        $myAccount->balance = $current_balance + $amount;
        $myAccount->overdraft = $overdraft;
        $json = json_encode($myAccount);
        $this->storeJson($username, $json);
        return TRUE;
      }
      else return FALSE;
    }
  }

  /**
   * Update the the overdraft allowance with the amount given.
   * @param $username
   * @param $amount
   */
  public function updateOverdraft($username, $amount) {
    if ($this->checkAccount($username)) {
      $current_balance = $this->displayBalance($username);
      $overdraft = $this->displayOverdraft($username);

      $myAccount = new \stdClass();
      $myAccount->username = $username;
      $myAccount->balance = $current_balance;
      $myAccount->overdraft = $overdraft + $amount;
      $json = json_encode($myAccount);
      $this->storeJson($username, $json);
    }
  }

  /**
   * Check if the JSON with the username has been created.
   * @param $username
   * @return bool
   */
  public function checkAccount($username) {
    $fs = new Filesystem();
    $accountExist = $fs->exists('/tmp/account/' . $username . '.json');
    return $accountExist;
  }

  /**
   * Read the JSON file and return the balance amount.
   * @param $username
   * @return mixed
   */
  public function displayBalance($username) {
    if ($this->checkAccount($username)) {
      $string = file_get_contents('/tmp/account/' . $username . '.json');
      $account = json_decode($string, true);
      return $account['balance'];
    }
  }

  /**
   * Read the JSON file and return the overdraft amount.
   * @param $username
   * @return mixed
   */
  public function displayOverdraft($username) {
    if ($this->checkAccount($username)) {
      $string = file_get_contents('/tmp/account/' . $username . '.json');
      $account = json_decode($string, true);
      return $account['overdraft'];
    }
  }

  /**
   * Close the account for the username given. Delete the JSON file.
   * @param $username
   * @return string
   */
  public function closeAccount($username) {
    if ($this->checkAccount($username)) {
      try {
        $fs = new Filesystem();
        $fs->remove('/tmp/account/' . $username . '.json');
        return "The account for " . $username . " has been closed.";
      }
      catch (IOException $e) {
        return $e;
      }
    }
    else return "The account for " . $username . " exists.";
  }
}