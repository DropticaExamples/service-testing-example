<?php
/**
 * @file
 * Base class to represent a page on a
 */

namespace Drupal\Pages;

/**
 * Class Page
 * @package Drupal\Pages
 */
class Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    public static $URL = '/';

    /**
     * Navigation bar selector.
     *
     * @var string
     */
    public static $navbar
      = '.whr-navbar';

    /**
     * CSS selector for the breadcrumb.
     *
     * @var string
     */
    public static $breadcrumb
      = '.breadcrumb';

    /**
     * Page title selector.
     *
     * @var string
     */
    public static $pageTitle
      = 'h1';

    /**
     * Selector for Drupal messages set by drupal_set_message().
     *
     * @var string
     */
    public static $drupalMessage
      = '.messages.status';

    /**
     * Selector for Drupal error messages set by drupal_set_message().
     *
     * @var string
     */
    public static $drupalWarningMessage
      = '.messages.warning';

    /**
     * Selector for Drupal error messages set by drupal_set_message().
     *
     * @var string
     */
    public static $drupalErrorMessage
      = '.messages.error';

    /**
     * Search field.
     *
     * @var string
     */
    public static $fieldSearch
      = '#edit-search-block-form--2';

    /**
     * Search buttom.
     *
     * @var string
     */
    public static $buttonSearch
      = '#edit-submit';

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param = '')
    {
      return static::$URL.$param;
    }

}
