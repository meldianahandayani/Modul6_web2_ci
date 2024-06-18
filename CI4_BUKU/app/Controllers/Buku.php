<?php
namespace App\Controllers;
use App\Models\BukuModel;
class Buku extends BaseController
{
    public function index (){
        $buku_model = new BukuModel();
        $all_data_buku = $buku_model ->findAll();
        return view ('buku', ['all_data_buku'=> $all_data_buku]);
    }
    public function add_data_buku(){
        return view ('add_data_buku'); 
    }
    public function proses_add_buku(){
        $buku_model = new BukuModel();
        $buku_model->insert($this->request->getPost());
        return redirect()-> to (base_url('buku'));
    }
    public function edit_data_buku($id=false){
        $buku_model = new BukuModel();
        $data_buku = $buku_model->find($id);
        return view ('edit_data_buku', ['data_buku' => $data_buku]);
    }
    public function proses_edit_buku(){
        $buku_model = new BukuModel();
        $buku_model->update($this->request->getPost('id_buku'), $this->request->getPost());
        return redirect()-> to (base_url('buku')); 
    }
    public function delete_data_buku ($id = false){
        $buku_model = new BukuModel();
        $buku_model ->delete ($id);
        return redirect()-> to (base_url('buku')); 
    }
}