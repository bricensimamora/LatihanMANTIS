<?php 
namespace App\Controllers;
use App\Models\TkModel;


class TkController extends BaseController
{
	protected $tkModel; 
	public function __construct()
	{
		$this->tkModel = new TkModel();
	}

	public function index()
	{   
	
        $data = [
			'title' => 'Daftar Tenaga Kerja',
			'tenagakerja' => $this->tkModel->getTk()
		];

		return view('SiTenagaKerja/DaftarTk', $data);
	}

	public function detailTk($id)
	{
		$data = [
			'title' => 'Tenaga Kerja Detail',
			'tenagakerja' => $this->tkModel->getTk($id)
		 ];

		 if(empty($data['tenagakerja'])){
			 throw new \CodeIgniter\Exceptions\PageNotFoundException('Data diri tidak ditemukan');
		 }

		return view('SiTenagaKerja/TkDetail', $data);
	}

	public function tambahTk(){
		$data = [
			'title' => 'Tambah Tenaga Kerja',
			'validation' => \Config\Services::validation()

		];
		return view('/SiTenagaKerja/TambahTk', $data);

	}
	public function simpan()
	{
		// Contoh validasi form
		if(!$this->validate([
			'tk_name' => 'required',
			'tk_alamat' => 'required',
			'tk_agama' => 'required',
			'tk_tanggalLahir' => 'required',
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/TkController/tambahTk')->withInput()->with('validation', $validation);
		}

		$this->tkModel->save([
			'tk_name' => $this->request->getVar('tk_name'),
			'tk_alamat' => $this->request->getVar('tk_alamat'),
			'tk_agama' => $this->request->getVar('tk_agama'),
			'tk_tanggalLahir' => $this->request->getVar('tk_tanggalLahir')
		]);
		// dd($this->request->getVar());

		session()->setFlashdata('pesan', 'Berhasil ditambahkan');

		return redirect()-> to('/');
	}

	public function hapusTk($id)
	{
		$this->tkModel->delete($id);
		session()->setFlashdata('pesan', 'Berhasil dihapus');

		return redirect()->to('/');
	}

	public function ubahTk($id){
		$data = [
			'title' => 'Ubah Tenaga Kerja',
			'validation' => \Config\Services::validation(),
			'tenagakerja' => $this->tkModel->getTk($id)

		];
		return view('/SiTenagaKerja/UbahTk', $data);
		
	}
	public function update($id){
		$this->tkModel->save([
			'tk_id' => $id,
			'tk_name' => $this->request->getVar('tk_name'),
			'tk_alamat' => $this->request->getVar('tk_alamat'),
			'tk_agama' => $this->request->getVar('tk_agama'),
			'tk_tanggalLahir' => $this->request->getVar('tk_tanggalLahir')
	]);
	// dd($this->request->getVar());

	session()->setFlashdata('pesan', 'Berhasil diubah');

	return redirect()-> to('/');
		}

}
