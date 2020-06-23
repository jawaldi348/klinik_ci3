<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('assets')) {
    function assets()
    {
        $link = base_url() . 'assets/';
        return $link;
    }
}
if (!function_exists('rupiah')) {
    function rupiah($uang)
    {
        $format = number_format($uang, 0, ",", ".");
        return $format;
    }
}
