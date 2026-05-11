<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Controllers\BaseController;

class Book extends BaseController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Buku Perpustakaan',
            'books' => $this->bookModel->findAll()
        ];
        return view('book/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Tambah Buku Baru'];
        return view('book/create', $data);
    }

    public function store()
    {
        $this->bookModel->save([
            'title'     => $this->request->getPost('title'),
            'author'    => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year'      => $this->request->getPost('year'),
        ]);
        return redirect()->to('/book')->with('success', 'Data berhasil ditambah');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Buku',
            'book'  => $this->bookModel->find($id)
        ];
        if(empty($data['book'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data buku tidak ditemukan');
        }
        return view('book/detail', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Buku',
            'book'  => $this->bookModel->find($id)
        ];
        return view('book/edit', $data);
    }

    public function delete($id)
    {
        $this->bookModel->delete($id);
        return redirect()->to('/book')->with('success', 'Data berhasil dihapus');
    }

    public function update($id)
{
    $this->bookModel->update($id, [
        'title'     => $this->request->getPost('title'),
        'author'    => $this->request->getPost('author'),
        'publisher' => $this->request->getPost('publisher'),
        'year'      => $this->request->getPost('year'),
    ]);
    return redirect()->to('/book')->with('success', 'Data berhasil diupdate');
}
}