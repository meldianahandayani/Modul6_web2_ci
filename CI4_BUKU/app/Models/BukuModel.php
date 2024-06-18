<?php
namespace App\Models;
use CodeIgniter\Model;
class BukuModel extends Model
{
    protected $table = 'tb_buku';
    protected $primaryKey ='id';
    protected $returnType = 'object';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
}