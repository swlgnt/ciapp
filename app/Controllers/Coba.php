<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		echo "ini coontroler coba method index";
	}

	public function about($nama = '')
	{
		echo "nama saya $nama";
	}
}