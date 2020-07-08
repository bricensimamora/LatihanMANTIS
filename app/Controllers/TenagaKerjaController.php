<?php 
namespace App\Controllers;
use App\Models\TenagaKerjaModel;

class TenagaKerjaController extends BaseController
{
	protected $daftarTenagaKerja;
	public function __construct()
	{
		$this->daftarTenagaKerja = new TenagaKerjaModel();
	}
	public function index()
	{   
        $data = [
			'title' => 'Daftar Tenaga Kerja',
			// 'tenaga kerja' => $this->daftarTenagaKerja->getTenagaKerja()
		];
		return view('SiTenagaKerja/DaftarTenagaKerja', $data);
	}

	public function tenagaKerjaDetail()
	{
		// $data = [
		// 	'title' => 'Tenaga Kerja Detail',
		// 	'tenaga kerja' => $this->daftarTenagaKerja->getTenagaKerjaByID($id)
		// ];

		return view('SiTenagaKerja/TenagaKerjaDetail');
	}

	public function tambahTenagaKerja(){
		$data = [
			'title' => 'Tambah Tenaga Kerja',
		];
		return view('/SiTenagaKerja/TambahTenagaKerja', $data);

	}

	public function save(){
		$this->request->getVar();
	}
}
