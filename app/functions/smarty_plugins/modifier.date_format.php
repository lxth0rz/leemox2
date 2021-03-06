<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty date_format modifier plugin
 *
 * Type:     modifier<br>
 * Name:     date_format<br>
 * Purpose:  format datestamps via strftime<br>
 * Input:<br>
 *         - string: input date string
 *         - format: strftime format for output
 *         - default_date: default date if $string is empty
 * @link http://smarty.php.net/manual/en/language.modifier.date.format.php
 *          date_format (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @param string
 * @param string
 * @return string|void
 * @uses smarty_make_timestamp()
 */
function smarty_modifier_date_format($string, $format="%b %e, %Y", $default_date=null)
{
    /**
    * Include the {@link shared.make_timestamp.php} plugin
    */
    require_once(SMARTY_PLUGINS_DIR . 'shared.make_timestamp.php');

    if ($string != '') {
        $timestamp = smarty_make_timestamp($string);

    } elseif (isset($default_date) && $default_date != '') {

        $timestamp = smarty_make_timestamp($default_date);

    } else {
        $timestamp = TIME;
    }

    return fn_date_format($timestamp, $format);
}

/* vim: set expandtab: */
