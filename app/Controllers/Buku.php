<?php

namespace App\Controllers;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use App\Models;
use App\Models\BukuModel;
use CodeIgniter\Validation\Rules;
use PHPUnit\TextUI\XmlConfiguration\MoveWhitelistDirectoriesToCoverage;

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

    public function detail($slug)
    {
        // $buku = $this->bukuModel->findAll();
        $buku = $this->bukuModel->getBuku($slug);
        $data = [
            'title' => 'Koleksi Buku',
            'buku' => $buku
            // 'buku' => $this->bukuModel->getBuku($slug)
        ];
        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul buku tidak ditemukan');
        }
        
        // dd($buku);
        // $bukuModel->findAll();
        // dd($bukuModel->findAll()); //untuk menampilkan dummy data
        return view('buku/detail',$data);
    }

    public function tambah()
    {
        // session();
        $data = [
            'title' => 'Tambah Data Buku',
            'valid' => \Config\Services::validation()
        ];
        return view('buku/create',$data);
    }

    public function simpan()
    {
        //validasi
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]',
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} sudah ada di database.'
                ]
                ],
            'sampul' => [
                'rules' => 'uploaded[sampul]',
                'errors' => '{field} harus berupa gambar JPG,PNG,JPEG atau sejenisnya'
            ]

        ])) {
            // $valid = \Config\Services::validation();
            // dd($valid);
            // return redirect()->to('/buku/tambah')->withInput()->with('validation', $valid);
            return redirect()->to('/buku/tambah')->withInput();
        }

        $slug=url_title($this->request->getVar('judul'),'-',true);
        $this->bukuModel->save([
            'judul'=>$this->request->getVar('judul'),
            'slug'=>$slug,
            'penulis'=>$this->request->getVar('penulis'),
            'penerbit'=>$this->request->getVar('penerbit'),
            'sampul'=>$this->request->getVar('sampul')
        ]);

        session()->setFlashData('pesan','Data berhasil disimpan!');
        
        return redirect()->to('/buku');
    }

    public function hapus($id){
        $this->bukuModel->delete($id);
        session()->setFlashData('pesan2','Data berhasil dihapus!');
        return redirect()->to('/buku');
    }

    public function ubah($slug){
         $data = [
            'title' => 'Form Ubah Data Buku',
            'valid' => \Config\Services::validation(),
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('buku/ubah',$data);
    }

    public function update($id)
    {
        $judulLama = $this->bukuModel->getBuku($this->request->getVar('slug'));
        if ($judulLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[buku.judul]';
        }
         //validasi
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} sudah ada di database.'
                ]
            ]
        ])) {
            $valid = \Config\Services::validation();
            // dd($valid);
            return redirect()->to('/buku/ubah/' . $this->request->getVar('slug'))->withInput()->with('validation', $valid);
        }
        
        $slug=url_title($this->request->getVar('judul'),'-',true);
        $this->bukuModel->save([
            'id'=>$id,
            'judul'=>$this->request->getVar('judul'),
            'slug'=>$slug,
            'penulis'=>$this->request->getVar('penulis'),
            'penerbit'=>$this->request->getVar('penerbit'),
            'sampul'=>$this->request->getVar('sampul')
        ]);

        session()->setFlashData('pesan','Data berhasil diubah!');
        
        return redirect()->to('/buku');
    }
}