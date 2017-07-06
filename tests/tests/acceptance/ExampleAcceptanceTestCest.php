<?php

use Step\Acceptance\UserSteps;
use Step\Acceptance\NodeSteps;
use Drupal\Pages\Page;
use Drupal\Pages\HomePage;
use Drupal\Pages\SearchPage;
use Codeception\Util\Shared\Asserts;
use Codeception\Module\DrupalTestUser;
use \Facebook\WebDriver\Remote\RemoteWebDriver as WebDriver;

class ExampleAcceptanceTestCest
{

  use Asserts;

  public function _before(AcceptanceTester $I) {
  }

  public function _after(AcceptanceTester $I) {
  }

  /**   TESTS     */


  /**
   * @param \AcceptanceTester $I
   */
  public function exampleTestTextOnHomepage(AcceptanceTester $I) {
    $I->wantTo('Test that text WHITE HOUSE is on homepage');
    $I->amOnPage(HomePage::route());
    $I->canSee('WHITE HOUSE');
  }

  /**
   * @param \AcceptanceTester $I
   */
  public function exampleTestSearch(AcceptanceTester $I) {
    $I->wantTo('Test that search works');
    $I->amOnPage(HomePage::route());
    $I->fillField(Page::$fieldSearch, 'Trump');
    $I->click(Page::$buttonSearch);
    $I->seeNumberOfElements(SearchPage::$blockResult, [1,20]); //between 1 and 20 elements
  }

  /**
   * @param \AcceptanceTester $I
   */
  public function exampleTestResponseCode(AcceptanceTester $I) {
    $I->wantTo('Test that response code is ok');
    $I->amOnPage(HomePage::route());
    $I->seeResponseCodeIs(200);
    $I->amOnPage('/thereisnopageonthissite');
    $I->seeResponseCodeIs(404);
  }

  /**
   * @param \AcceptanceTester $I
   */
  public function exampleTestSeeInSouce(AcceptanceTester $I) {
    $I->wantTo('Test that I can see title and text in source');
    $I->amOnPage('/america-first-foreign-policy');
    $I->seeInTitle('America First Foreign Policy');
    $I->seeInSource('<h2 class="pane-title"><span class="active-trail nolink">Issues</span></h2>');
    $I->seeInSource('function advagg_mod_1()');
    $I->seeLink('America First Energy Plan','/america-first-energy'); // matches <a href="/america-first-energy">America First Energy Plan</a>
  }

}
