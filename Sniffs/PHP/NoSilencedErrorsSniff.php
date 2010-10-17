<?php
/**
 * Generic_Sniffs_PHP_NoSilencedErrorsSniff
 *
 * PHP version 5
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Andy Brockhurst <abrock@yahoo-inc.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  CVS: $Id: NoSilencedErrorsSniff.php 270342 2008-12-03 04:42:07Z squiz $
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Generic_Sniffs_PHP_NoSilencedErrorsSniff.
 *
 * Throws an error or warning when any code prefixed with an asperand is encountered.
 *
 * <code>
 *  if (@in_array($array, $needle))
 *  {
 *      doSomething();
 *  }
 * </code>
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Andy Brockhurst <abrock@yahoo-inc.com>
 * @license  http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version  Release: 1.2.2
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
class Grooveshark_Sniffs_PHP_NoSilencedErrorsSniff extends Generic_Sniffs_PHP_NoSilencedErrorsSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * If true, an error will be thrown; otherwise a warning.
     *
     * @var bool
     */
    protected $error = true;

}//end class

?>
