<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('text_success')) {
    function text_success($modul, $item)
    {
        if ($item == 'store')
            $pesan = 'Anda berhasil menambahkan data';
        else if ($item == 'update')
            $pesan = 'Anda berhasil mengubah data';
        $value = '<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> Success: ' . $pesan . ' ' . $modul . '.<button type="button" class="close" data-dismiss="alert">×</button></div>';
        return $value;
    }
}
if (!function_exists('text_error')) {
    function text_error($item)
    {
        $value = '<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> Warning: You cannot delete a ' . $item . '.<button type="button" class="close" data-dismiss="alert">×</button></div>';
        return $value;
    }
}
