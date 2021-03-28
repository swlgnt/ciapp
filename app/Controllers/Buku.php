<?php

namespace App\Controllers;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use App\Models;
use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        // $bukuModel = new \App\Models\BukuModel();
        $this->bukuModel = new BukuModel();
    }
    public function index()
    {   
        $buku = $this->bukuModel->findAll();
        
        $data = [
            'title' => 'Koleksi Buku',
            'buku' => $buku
        ];
        // dd($buku);
        // $bukuModel->findAll();
        // dd($bukuModel->findAll()); //untuk menampilkan dummy data
        return view('buku/index',$data);
    }    
}