<?php

namespace App\Controllers;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Buku extends BaseController
{
public function index()
{   
    $data = [
        'title' => 'Koleksi Buku'
    ];
    return view('buku/index',$data);
}    
}