<?php
use Overtrue\Pinyin\Pinyin;

if (!function_exists('pinyin')) {
    /**
     * Get the Pinyin of given string.
     *
     * @param string $string
     * @param string $option
     *
     * @return string
     */
    function pinyin($string, $option = Pinyin::NONE)
    {
        return app('pinyin')->convert($string, $option);
    }
}

if (!function_exists('pinyin_abbr')) {
    /**
     * Get the fist letters of given string.
     *
     * @param string $string
     * @param string $delimiter
     *
     * @return string
     */
    function pinyin_abbr($string, $delimiter = '')
    {
        return app('pinyin')->abbr($string, $delimiter);
    }
}

if (!function_exists('pinyin_permlink')) {
    /**
     * Get a pinyin permalink from string.
     *
     * @param string $string
     * @param string $delimiter
     *
     * @return string
     *
     * @deprecated since version 3.0.1. Use the "pinyin_permalink" method instead.
     */
    function pinyin_permlink($string, $delimiter = '-')
    {
        return app('pinyin')->permalink($string, $delimiter);
    }
}

if (!function_exists('pinyin_permalink')) {
    /**
     * Get a pinyin permalink from string.
     *
     * @param string $string
     * @param string $delimiter
     *
     * @return string
     */
    function pinyin_permalink($string, $delimiter = '-')
    {
        return app('pinyin')->permalink($string, $delimiter);
    }
}

if (!function_exists('pinyin_sentence')) {
    /**
     * Get the fist pinyin and letters of given string.
     *
     * @param string $string
     * @param string $tone
     *
     * @return string
     */
    function pinyin_sentence($string, $tone = false)
    {
        return app('pinyin')->sentence($string, $tone);
    }
}
