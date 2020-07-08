<?php namespace App\Models;

use CodeIgniter\Model;

class TkModel extends Model
{
    protected $table = 'tenagakerja';

    protected $allowedFields = ['tk_name', 'tk_alamat', 'tk_agama', 'tk_tanggalLahir'];

    // Untuk mengambil data semua atau berdasarkan id
    public function getTk($id = null){
        if($id==null){
           return $this->findAll();    
        }
        else{
            return $this->where(['tk_id' => $id])->first();
        }
      
    }
    
    
    
}