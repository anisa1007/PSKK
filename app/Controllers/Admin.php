<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\UserModel;

use CodeIgniter\I18n\Time;
use DateTime;

class Admin extends BaseController
{
	//Connect Model
	protected $pendaftarModel, $userModel;
	public function __construct()
	{
		$this->pendaftarModel = new PendaftarModel();
		$this->userModel = new UserModel();
	}
	//Fungsi Beranda Admin
	public function beranda()
	{
		$pendaftar = $this->pendaftarModel->getAllPendaftar();
		$menungguPersetujuan = 0;
		$diterima = 0;
		$ditolak = 0;
		$cadangan = 0;
		foreach ($pendaftar as $p) {
			if ($p['status'] == "Menunggu Persetujuan") {
				// $menungguPersetujuan = $menungguPersetujuan + 1;
				$menungguPersetujuan += 1;
			} elseif ($p['status'] == "Diterima") {
				$diterima += 1;
			} elseif ($p['status'] == "Ditolak") {
				$ditolak += 1;
			} elseif ($p['status'] == "Cadangan") {
				$cadangan += 1;
			}
		}

		$data = [
			'halaman' => 'Beranda',
			'menungguPersetujuan' => $menungguPersetujuan,
			'diterima' => $diterima,
			'ditolak' => $ditolak,
			'cadangan' => $cadangan
		];

		return view('page/admin/beranda', $data);
	}

	//Fungsi Detail atau Daftar Pendaftar
	public function infoPendaftar()
	{
		$data = [
			'halaman' => 'Info Pendaftar',
			'pendaftar' => $this->pendaftarModel->getAllPendaftar()
		];

		return view('page/admin/detail', $data);
	}

	//Fungsi Detail Data Diri atau Verifikasi dari Admin
	public function detailPendaftar($id)
	{
		$data = [
			'halaman'   => 'Detail Pendaftar',
			'pendaftar' => $this->pendaftarModel->getDetailPendaftar($id)
		];

		return view('page/admin/edit_siswa', $data);
	}

	//Fungsi Update Dari Verifikasi Admin
	public function updatePendaftar($id)
	{
		$this->pendaftarModel->insertPendaftar([
			'id' => $id,
			'status' => $this->request->getVar('status'),
			'updated_at' => DateTime::createFromFormat('Y-m-d H:i:s', Time::now('Asia/Jakarta'))->format('j F Y, G:i') . ' WIB'
		]);

		session()->setFlashdata('success', 'Data berhasil diubah.');
		return redirect()->to("/admin/info-pendaftar");
	}
	//Fungsi Tampilan Akun Pendaftar
	public function akunPendaftar()
	{
		$data = [
			'halaman'   => 'Akun Pendaftar',
			'user' 	    => $this->userModel->getAllUser()
		];

		return view('page/admin/akun', $data);
	}
}
