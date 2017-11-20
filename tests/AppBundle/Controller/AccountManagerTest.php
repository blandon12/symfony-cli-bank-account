<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Controller\AccountManager;

class AccountManagerTest extends \PHPUnit_Framework_TestCase {

  protected $account;

  public function __construct() {
    $this->account = new AccountManager();
  }

  public function testCreateAccount() {
    $username = 'testCreateAccount';
    $this->account->createAccount($username);
    $result = $this->account->checkAccount($username);
    $this->assertTrue($result);
    $this->account->closeAccount($username);
  }

  public function testCloseAccount() {
    $username = 'testCloseAccount';
    $this->account->createAccount($username);
    $this->account->closeAccount($username);
    $result = $this->account->checkAccount($username);
    $this->assertFalse($result);
  }

  public function testUpdateOverdraft() {
    $username = 'testUpdateOverdraft';
    $this->account->createAccount($username);
    $this->account->updateOverdraft($username, 10);
    $overdraft = $this->account->displayOverdraft($username);
    $expect = 10;
    $this->assertEquals($expect, $overdraft);
  }

  public function testUpdateBalance() {
    $username = 'testUpdateBalance';
    $balance = 10;
    $overdraft = 10;
    $withdraw = -15;
    $expect = -5;
    $this->account->createAccount($username);
    $this->account->updateBalance($username, $balance);
    $this->account->updateOverdraft($username, $overdraft);
    $this->account->updateBalance($username, $withdraw);
    $actual = $this->account->displayBalance($username);
    $this->assertEquals($expect, $actual);
    $this->account->closeAccount($username);
  }

  public function testDisplayBalance() {
    $username = 'testDisplayBalance';
    $amount = 10;
    $expect = 10;
    $this->account->createAccount($username);
    $this->account->updateBalance($username, $amount);
    $this->account->displayBalance($username);
    $this->assertEquals($expect, $amount);
  }
}