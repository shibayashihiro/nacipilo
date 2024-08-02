<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageNorm extends CI_Controller {

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

	/*
	*	Summary
	*/

    public function summary() {
		$this->db->select('');
		$this->db->where('ID', 1);
		$this->db->from('tblnorm');
		$data = $this->db->get()->row_array();

		$this->load->view('be/norm/summary', $data);
	}

	public function updateSummary() {
		$data = $this->input->post();

		$this->db->where('ID', 1);
		$this->db->update('tblnorm', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	/*
	*	Capability
	*/

	public function solutions() {
		$this->db->select('*');
		$this->db->where('Type', 'solution');
		$this->db->from('tblservices');
		$data['solutions'] = $this->db->get()->result_array();
		
		$this->load->view('be/norm/solutions', $data);
	}
}