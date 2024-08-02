<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageWaste extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct() {
		
		parent::__construct();
		date_default_timezone_set('EST');
	}

	public function index()
	{		
    }

	/*
	*	Summary
	*/

	public function summary() {
		$this->db->select('*');
		$this->db->where('ID', 1);
		$this->db->from('tblwaste');
		$data = $this->db->get()->row_array();

		$this->load->view('be/waste-management/summary', $data);
	}

	public function updateSummary() {
		$data = $this->input->post();

		$this->db->where('ID', 1);
		$this->db->update('tblwaste', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	/*
	*	Portfolios
	*/

	public function portfolios() {
		$this->db->select('*');
		$this->db->where('Type', 'waste-portfolio');
		$this->db->from('tblresources');
		$data['images'] = $this->db->get()->result_array();

		$this->load->view('be/waste-management/portfolios', $data);
	}

	/*
	*	Services
	*/

	public function services() {
		$this->db->select('*');
		$this->db->where('Type', 'waste');
		$this->db->from('tblservices');
		$data['services'] = $this->db->get()->result_array();
		
		$this->load->view('be/waste-management/services', $data);
	}


	/*
	*	Streams
	*/

	public function streams() {
		$this->db->select('*');
		$this->db->where('Type', 'waste stream');
		$this->db->from('tblservices');
		$data['streams'] = $this->db->get()->result_array();
		
		$this->load->view('be/waste-management/streams', $data);
	}
}