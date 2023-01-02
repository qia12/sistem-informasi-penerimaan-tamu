<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Global_m');
	}
	public function index(){
		
		$data['confirm'] = $this->Global_m->get_data('confirm_visit');
		$data['confirm'] = json_decode(json_encode($data['confirm']), true);

		
		$this->load->view('dashboard_v',$data);
		

	}

	public function all_data(){
		$data->$this->Global_m->get_data('confirm_visit');

		var_dump($data);
	}

	public function hapus_data($NoKonfirmasi){
		$where = array('NoKonfirmasi' => $NoKonfirmasi);
		$this->Global_m->delete($where, 'confirm_visit');
		//var_dump($where);
		redirect('Dashboard');
		
	}

	public function ubah_data($NoKonfirmasi){
		$where = array('NoKonfirmasi' => $NoKonfirmasi);
		$data['confirm_visit'] = $this->Global_m->ubah($where, 'confirm_visit')->result();
		//var_dump($where);
		
		$this->load->view('formedit_v',$data);
	}
	public function update(){
		$NoKonfirmasi = $this->input->post('NoKonfirmasi');
		$Persetujuan = $this->input->post('Persetujuan');
		$Keterangan = $this->input->post('Keterangan');
		$NIP = $this->input->post('NIP');
		$Tanggal = $this->input->post('Tanggal');

		
		
		$data = array(
			'NoKonfirmasi' => $NoKonfirmasi,
			'Persetujuan' => $Persetujuan,
			'Keterangan' => $Keterangan,
			'NIP' => $NIP,
			'Tanggal' => $Tanggal
		);

		$where = array (
			'NoKonfirmasi' => $NoKonfirmasi
		);
		
		$this->Global_m->update_data($where,$data,'confirm_visit');

		redirect('Dashboard');

	}
	

	
}