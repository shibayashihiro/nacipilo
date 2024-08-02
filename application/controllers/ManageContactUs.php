<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageContactUs extends CI_Controller {

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

	public function index() {
        $this->db->select('*');
        $this->db->from('tblcontactus');
        $data = $this->db->get()->row_array(); 

        $this->load->view('be/contact-us/index', $data);
    }

    public function updateSummary() {
		$data = $this->input->post();

		$this->db->where('ID', 1);
		$this->db->update('tblcontactus', $data);

		echo json_encode(array(
			'success' => true
		));
    }
    
    public function sendEmail() {
		$name = $this->input->post('name');		
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		$config = Array(
			'protocol' => 'smtps',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'philotechnics123@gmail.com',
			'smtp_pass' => 'intheairtonight123',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
			);

		$this->load->library('email', $config);		

		$this->email->set_newline("\r\n");
		$this->email->from('philotechnics123@gmail.com', 'Contact Us');
		$this->email->to('information@philotechnics.com');
		$this->email->subject('Contact Us');

		$cotent = "Name: <strong>".$name. "</strong><br>Email: <strong>" .$email ."</strong><br>Message:<br><strong>". $message.'</strong>';
		$this->email->message($cotent);

		if ($this->email->send())
		{
			echo json_encode(
                array(
                    'success' => true
                )
				);
			return;
		}

		show_error($this->email->print_debugger());
	}
	
}