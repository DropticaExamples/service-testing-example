<?php

use Step\JSCapable\NodeSteps;
use Step\JSCapable\UserSteps;
use Drupal\Pages\Page;
use Drupal\Pages\HomePage;
use Drupal\Pages\ApplyPage;
use Codeception\Util\Shared\Asserts;
use Codeception\Module\DrupalTestUser;
use \Facebook\WebDriver\Remote\RemoteWebDriver as WebDriver;

class ExampleJSTestCest
{

  use Asserts;

  public function _before(JSCapableTester $I) {
  }

  public function _after(JSCapableTester $I) {
  }


  /**   TESTS     */

  /**
   * @param \JSCapableTester $I
   * @param \Step\JSCapable\UserSteps $U
   * @param \Step\JSCapable\NodeSteps $N
   */
  public function exampleTestOfText(JSCapableTester $I, UserSteps $U, NodeSteps $N) {
    $I->wantTo('Test text');
    $I->amOnPage(HomePage::route());
    $I->canSee('WHITE HOUSE');
  }

  /**
   * @param \JSCapableTester $I
   */
  public function exampleTestOfOtherText(JSCapableTester $I) {
    $I->wantTo('Test some other text');
    $I->amOnPage(HomePage::route());
    $I->canSee('“Believe in yourselves. Believe in your future.');
  }

  /**
   * @param \JSCapableTester $I
   */
  public function exampleTestCookiesOnHomepage(JSCapableTester $I) {
    $I->wantTo('Test that cookies are on homepage');
    $I->amOnPage(HomePage::route());
    $I->canSeeCookie('_ga');
    $I->canSeeCookie('_gid');
    $I->canSeeCookie('has_js');
  }

  /**
   * @param \JSCapableTester $I
   */
  public function exampleTestFillContactForm(JSCapableTester $I) {
    $I->wantTo('Test that I can fill contact form');
    $I->amOnUrl('https://apply.whitehouse.gov/');
    $I->fillField(ApplyPage::$firstNameField, 'ExampleFirstName');
    $I->fillField(ApplyPage::$midleNameField,'ExampleMiddleName');
    $I->fillField(ApplyPage::$lastNameField,'ExampleLastName');
    $I->fillField(ApplyPage::$emailAddressField,'example@mail.com');
    $I->fillField(ApplyPage::$address1Field,'ExampleAddress');
    $I->fillField(ApplyPage::$address2Field,'ExampleAddress2');
    $I->fillField(ApplyPage::$phoneField,'123456789');
    $I->fillField(ApplyPage::$cityField,'ExampleCity');
    $I->selectOption(ApplyPage::$stateField, 'Alaska');
    $I->fillField(ApplyPage::$zipCodeField,'112233');
    $I->fillField(ApplyPage::$currentEmployerField,'ExampleEmployer');
    $I->selectOption(ApplyPage::$citizenOfUSField, 'Yes, I am a citizen of the United States');
    $I->selectOption(ApplyPage::$elegibleToWorkField, 'Not Applicable');
    $I->selectOption(ApplyPage::$veteranField, 'No');
    $I->selectOption(ApplyPage::$raceField, 'White');
    $I->selectOption(ApplyPage::$genderField, 'Male');
    $I->fillField(ApplyPage::$dobField,'11/11/2000');
    $I->selectOption(ApplyPage::$geographicaffiliationField, 'Alaska');
    $I->selectOption(ApplyPage::$partyField, 'Independent');
    $I->fillField(ApplyPage::$answer1Field,'answer1');
    $I->fillField(ApplyPage::$answer2Field,'answer2');
    $I->fillField(ApplyPage::$answer3Field,'answer3');
    $I->scrollTo(ApplyPage::$departmentsUnselectedList); 
    $I->click(ApplyPage::$departmentsUnselectedFirstOption);
    $I->click(ApplyPage::$departmentsRightArrow);
    $I->click(ApplyPage::$departmentsUnselectedFirstOption);
    $I->click(ApplyPage::$departmentsRightArrow);
    $I->click(ApplyPage::$functionsUnselectedFirstOption);
    $I->click(ApplyPage::$functionsRightArrow);
    $I->click(ApplyPage::$policiesUnselectedFirstOption);
    $I->click(ApplyPage::$policiesRightArrow);
    $I->scrollTo(ApplyPage::$abcsUnselectedList); 
    $I->click(ApplyPage::$abcsUnselectedFirstOption);
    $I->click(ApplyPage::$abcsRightArrow);
    $I->click(ApplyPage::$abcsUnselectedFirstOption);
    $I->click(ApplyPage::$abcsRightArrow);
    $I->fillField(ApplyPage::$captchaField, 'I am not a human');

    $I->makeScreenshot('contact_form');
  }

}
