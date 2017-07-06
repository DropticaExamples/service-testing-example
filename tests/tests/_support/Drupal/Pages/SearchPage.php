<?php

namespace Drupal\Pages;

/**
 * Class SearchPage
 * @package Drupal\Pages
 */
class SearchPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    public static $URL = '/search';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Result block.
     *
     * @var string
     */
    public static $blockResult
      = '.content-block-item.result';

}
