<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('inputRequired')) {
    function errorRequired()
    {
        // return 'Kolom {field} wajib diisi';
        return 'Field ini tidak boleh kosong';
    }
}

if (!function_exists('errorDelimiter')) {
    function errorDelimiter()
    {
        return '<div class="help-block col-sm-reset inline">';
    }
}
if (!function_exists('isUnique')) {
    function isUnique()
    {
        return 'Field {field} sudah digunakan';
    }
}

if (!function_exists('errorDestroy')) {
    function errorDestroy()
    {
        return 'Data Not Deleted. Something went wrong!!!';
    }
}
if (!function_exists('successDestroy')) {
    function successDestroy()
    {
        return 'Data Deleted Successfully';
    }
}
