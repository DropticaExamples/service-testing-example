<?php

namespace Drupal\Pages;

/**
 * Class ApplyPage
 * @package Drupal\Pages
 */
class ApplyPage extends Page
{
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * First name field in apply form.
     *
     * @var string
     */
    public static $firstNameField
      = '#appPage\:appForm\:pageBlock\:firstName';

    /**
     * Middle name field in apply form.
     *
     * @var string
     */
    public static $midleNameField
      = '#appPage\:appForm\:pageBlock\:middleName';

    /**
     * Last name field in apply form.
     *
     * @var string
     */
    public static $lastNameField
      = '#appPage\:appForm\:pageBlock\:lastName';

    /**
     * Email Address field in apply form.
     *
     * @var string
     */
    public static $emailAddressField
      = '#appPage\:appForm\:pageBlock\:emailAddress';

    /**
     * Address 1 field in apply form.
     *
     * @var string
     */
    public static $address1Field
      = '#appPage\:appForm\:pageBlock\:address1';

    /**
     * Address 2 field in apply form.
     *
     * @var string
     */
    public static $address2Field
      = '#appPage\:appForm\:pageBlock\:address2';

    /**
     * Phone field in apply form.
     *
     * @var string
     */
    public static $phoneField
      = '#appPage\:appForm\:pageBlock\:phone';

    /**
     * City field in apply form.
     *
     * @var string
     */
    public static $cityField
      = '#appPage\:appForm\:pageBlock\:city';

    /**
     * State field in apply form.
     *
     * @var string
     */
    public static $stateField
      = '#appPage\:appForm\:pageBlock\:state';

    /**
     * ZIP code field in apply form.
     *
     * @var string
     */
    public static $zipCodeField
      = '#appPage\:appForm\:pageBlock\:zipCode';

    /**
     * Current employer field in apply form.
     *
     * @var string
     */
    public static $currentEmployerField
      = '#appPage\:appForm\:pageBlock\:currentEmployer';

    /**
     * Citizen of US field in apply form.
     *
     * @var string
     */
    public static $citizenOfUSField
      = '#appPage\:appForm\:pageBlock\:citizenOfUS';

    /**
     * Elegible to work field in apply form.
     *
     * @var string
     */
    public static $elegibleToWorkField
      = '#appPage\:appForm\:pageBlock\:elegibleToWork';

    /**
     * Veteran field in apply form.
     *
     * @var string
     */
    public static $veteranField
      = '#appPage\:appForm\:pageBlock\:veteran';

    /**
     * Race field in apply form.
     *
     * @var string
     */
    public static $raceField
      = '#appPage\:appForm\:pageBlock\:race';

    /**
     * Gender field in apply form.
     *
     * @var string
     */
    public static $genderField
      = '#appPage\:appForm\:pageBlock\:Gender';

    /**
     * Date of birth field in apply form.
     *
     * @var string
     */
    public static $dobField
      = '#appPage\:appForm\:pageBlock\:dob';

    /**
     * Geographic affiliation field in apply form.
     *
     * @var string
     */
    public static $geographicaffiliationField
      = '#appPage\:appForm\:pageBlock\:geographicaffiliation';

    /**
     * Party field in apply form.
     *
     * @var string
     */
    public static $partyField
      = '#appPage\:appForm\:pageBlock\:party';

    /**
     * Answer 1 field in apply form.
     *
     * @var string
     */
    public static $answer1Field
      = '#appPage\:appForm\:pageBlock\:answer1';

    /**
     * Answer 2 field in apply form.
     *
     * @var string
     */
    public static $answer2Field
      = '#appPage\:appForm\:pageBlock\:answer2';

    /**
     * Answer 3 field in apply form.
     *
     * @var string
     */
    public static $answer3Field
      = '#appPage\:appForm\:pageBlock\:answer3';

    /**
     * Captcha field in apply form.
     *
     * @var string
     */
    public static $captchaField
      = '#appPage\:appForm\:pageBlock\:captcha';

    /**
     * Departments unselected list in apply form.
     *
     * @var string
     */
    public static $departmentsUnselectedList
      = '#appPage\:appForm\:pageBlock\:departments_unselected';

    /**
     *  abcs unselected list in apply form.
     *
     * @var string
     */
    public static $abcsUnselectedList
      = '#appPage\:appForm\:pageBlock\:abcs_unselected';

    /**
     * Departments unselected first option in apply form.
     *
     * @var string
     */
    public static $departmentsUnselectedFirstOption
      = '#appPage\:appForm\:pageBlock\:departments_unselected > option';

    /**
     * Functions unselected first option in apply form.
     *
     * @var string
     */
    public static $functionsUnselectedFirstOption
      = '#appPage\:appForm\:pageBlock\:functions_unselected > option';

    /**
     * Policies unselected first option in apply form.
     *
     * @var string
     */
    public static $policiesUnselectedFirstOption
      = '#appPage\:appForm\:pageBlock\:policies_unselected > option';

    /**
     * abcs unselected first option in apply form.
     *
     * @var string
     */
    public static $abcsUnselectedFirstOption
      = '#appPage\:appForm\:pageBlock\:abcs_unselected > option';

    /**
     * Departments right arrow in apply form.
     *
     * @var string
     */
    public static $departmentsRightArrow
      = '#appPage\:appForm\:pageBlock\:departments_right_arrow';

    /**
     * Functions right arrow in apply form.
     *
     * @var string
     */
    public static $functionsRightArrow
      = '#appPage\:appForm\:pageBlock\:functions_right_arrow';

    /**
     * Policies right arrow in apply form.
     *
     * @var string
     */
    public static $policiesRightArrow
      = '#appPage\:appForm\:pageBlock\:policies_right_arrow';

    /**
     * abcs right arrow in apply form.
     *
     * @var string
     */
    public static $abcsRightArrow
      = '#appPage\:appForm\:pageBlock\:abcs_right_arrow';

}
