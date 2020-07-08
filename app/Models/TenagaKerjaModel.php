<?php namespace App\Models;

use CodeIgniter\Model;

class TenagaKerjaModel extends Model
{
    protected $table = 'tenagakerja';

    public function getTenagaKerja(){
        return $this->findAll();
    }
    public function getTenagaKerjaByID($id){
        return $this->find($id);
    }

}