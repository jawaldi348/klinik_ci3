<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'small' => title(),
			'links' => ''
		];
		$this->template->display('layout/content', $data);
	}
}
