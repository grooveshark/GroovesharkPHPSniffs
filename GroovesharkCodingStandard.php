<?php
/**
 * PEAR Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: PEARCodingStandard.php 269131 2008-11-17 05:04:07Z squiz $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * PEAR Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.2.2
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_Grooveshark_GroovesharkCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{


    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The PEAR standard uses some generic sniffs.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
                'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
                'Generic/Sniffs/PHP/LowerCaseConstantSniff.php',
                'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
                'Generic/Sniffs/WhiteSpace/DisallowTabIndentSniff.php',
                'PEAR/Sniffs/Classes/ClassDeclarationSniff.php',
                'PEAR/Sniffs/ControlStructures/ControlSignatureSniff.php',
                'PEAR/Sniffs/ControlStructures/MultiLineConditionSniff.php',
                'PEAR/Sniffs/ControlStructures/InlineControlStructureSniff.php',
                'PEAR/Sniffs/Files/LineEndingsSniff.php',
                'PEAR/Sniffs/Functions/FunctionCallArgumentSpacingSniff.php',
                'PEAR/Sniffs/Functions/ValidDefaultValueSniff.php',
                'PEAR/Sniffs/NamingConventions/ValidClassNameSniff.php',
                'PEAR/Sniffs/WhiteSpace/ObjectOperatorIndentSniff.php',
                'PEAR/Sniffs/WhiteSpace/ScopeClosingBraceSniff.php',
                'Generic/Sniffs/PHP/ForbiddenFunctionsSniff.php',
                'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
                'Generic/Sniffs/CodeAnalysis/ForLoopShouldBeWhileLoopSniff.php',
                'Generic/Sniffs/CodeAnalysis/ForLoopWithTestFunctionCallSniff.php',
                'Generic/Sniffs/CodeAnalysis/JumbledIncrementerSniff.php',
                'Generic/Sniffs/CodeAnalysis/UselessOverridingMethodSniff.php',
                'Generic/Sniffs/ControlStructures/InlineControlStructureSniff.php',
                'Generic/Sniffs/Formatting/DisallowMultipleStatementsSniff.php',
                'Generic/Sniffs/Formatting/NoSpaceAfterCastSniff.php',
                'Generic/Sniffs/Metrics/NestingLevelSniff.php',
                'Generic/Sniffs/NamingConventions/ConstructorNameSniff.php',
                'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
                'Generic/Sniffs/Strings/UnnecessaryStringConcatSniff.php',
                'Generic/Sniffs/Functions/OpeningFunctionBraceBsdAllmanSniff.php',
               );

    }//end getIncludedSniffs()


}//end class
?>
