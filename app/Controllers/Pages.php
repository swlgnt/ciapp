<?php

namespace App\Controllers;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'title'=>'Home',
            'test'=>['satu','dua','tiga']
        ];
        // echo view('layout/header', $data);
		return view('pages/home',$data);
        // echo view('layout/footer');
	}

    public function about()
    {
        $data = [
            'title'=>'About Me'];
        // echo view('layout/header', $data);
		return view('pages/about',$data);
        // echo view('layout/footer');
    }

    public function contact()
    {
        $data = [
            'title'=>'Contact',
            'alamat' => [
                [
            'jalan'=>'Jalan ABC',
            'nomor'=>'99',
            'kota'=>'Malang'
                ]
            ]
                ];
		return view('pages/contact',$data);
    }

}