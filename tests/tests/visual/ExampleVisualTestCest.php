<?php

use Drupal\Pages\HomePage;
use Codeception\Util\Shared\Asserts;
use Codeception\Module\DrupalTestUser;
use \Facebook\WebDriver\Remote\RemoteWebDriver as WebDriver;

class VisualceptionTestCest
{

  use Asserts;

  public function _before(VisualTester $I) {
    
  }

  public function _after(JSCapableTester $I) {
  }

  /**   TESTS     */

  /**
   * @param \VisualTester $I
   */
  public function exampleHomepageVisual(VisualTester $I) {
    $I->wantTo('Visual test on homepage');
    $I->amOnPage(HomePage::route());
    $I->dontSeeVisualChanges('homepage');
  }

  /**
   * @param \VisualTester $I
   */
  public function exampleOtherPageVisual(VisualTester $I) {
    $I->wantTo('Visual test on some other page');
    $I->amOnPage('/america-first-energy');
    $I->dontSeeVisualChanges('america-first-energy');
  }

  /**
   * @param \VisualTester $I
   */
  public function exampleVisualChangesElementOnPage(VisualTester $I) {
    $I->wantTo('Visual test element on page');
    $I->amOnPage('/america-first-energy');
    $I->dontSeeVisualChanges('america-first-energy-navbar', '.whr-navbar');
  }

}
