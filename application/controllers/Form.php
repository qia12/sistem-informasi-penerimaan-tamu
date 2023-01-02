<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->helper('url');
		$this->load->model('Global_m');
        $this->load->library('form_validation');
	}
	public function index()
	{
        $data['judul'] = 'Halaman Form';
        $this->load->view('templates/header', $data);
		$this->load->view('formkonfirmasi_v');
        $this->load->view('templates/footer');
	}


    public function simpandata(){
        
        $NoKonfirmasi = $this->input->post('NoKonfirmasi');
        $Persetujuan= $this->input->post('Persetujuan');
        $Keterangan = $this->input->post('Keterangan');
        $NIP = $this->input->post('NIP');
        $Tanggal = $this->input->post('Tanggal');

        // var_dump ($Persetujuan);
        // var_dump ($Keterangan);

        $data= array (
            'NoKonfirmasi' => $NoKonfirmasi,
            'Persetujuan' => $Persetujuan,
            'Keterangan'  => $Keterangan,
            'NIP'  => $NIP,
            'Tanggal'  => $Tanggal
        );

        //var_dump($data);

        $this->Global_m->input_data('confirm_visit', $data);
        
       //echo '{"Data Berhasil Di Input"}';

       redirect(base_url('form'));

 
    }
}
