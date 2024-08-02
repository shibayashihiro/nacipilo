<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageCareer extends CI_Controller {

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
		$this->db->from('tblcareer');
		$data = $this->db->get()->row_array();

		$this->load->view('be/career/summary', $data);
	}

	public function updateSummary() {
		$data = $this->input->post();

		$this->db->where('ID', 1);
		$this->db->update('tblcareer', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	/*
	*	Benefit
	*/

	public function benefits() {
		$this->db->select('*');
		$this->db->where('Type', 'benefit');
		$this->db->from('tblservices');
		$data['benefits'] = $this->db->get()->result_array();
		
		$this->load->view('be/career/benefits', $data);
    }
    
    /*
    *   Jobs
    */

    public function jobs() {
        $this->db->select('*');
        $this->db->from('tbljobs');
        $data['jobs'] = $this->db->get()->result_array();

        $this->load->view('be/career/jobs', $data);
    }

    public function job_edit($id) {
		
		if ($id != 0) {
			$this->db->select('*');
			$this->db->where('ID', $id);
			$this->db->from('tbljobs');
			$job = $this->db->get()->row_array();
			$job['ID'] = $id;
		}
		else {
			$job['Title'] ='';
			$job['Description'] = '';
			$job['ID'] = 0;
		}
		
        $this->load->view('be/career/job-edit', $job);
	}

    /*
    *   Job Apis
    */

    public function deleteJob() {
        $ID = $this->input->post('ID');
		
		$this->db->where('ID', $ID);
		$this->db->delete('tbljobs');

		echo json_encode(array(
			'success' => true
        ));
    }

    public function updateJob() {
		$ID = $this->input->post('ID');

        $blog_data = array(
            'Title' => $this->input->post('Title'),
			'Description' => $this->input->post('Description'),
        );
		$returnedID = 0;

		if ($ID == '0') {
			$this->db->set($blog_data);
			$returnedID = $this->db->insert('tbljobs');
		}
		else {
			$this->db->where('ID', $ID);
			$this->db->update('tbljobs', $blog_data);

			$returnedID = $this->db->affected_rows();
		}

		if ($returnedID == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true
			));
	}

	public function getJob() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tbljobs');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'Title' => $data['Title'],
				'Content' => $data['Description']
			)
			);
	}
}