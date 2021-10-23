<?php
/**
 * 
 */
class tokoSepatu extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('forminput');
	}

	public function proses()
	{
		$this->load->model(['tokosepatu_model']);
		$data = [
			'nama' => $this->input->post('nama'),
			'nomer'=> $this->input->post('nomer'),
			'merk'=> $this->input->post('merk'),
			'ukuran'=> $this->input->post('ukuran'),
			'harga'=>$this->tokosepatu_model->getBiaya($this->input->post('merk'))

		];

		$this->load->view('formoutput',$data);	}
}