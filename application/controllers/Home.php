<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	
		$this->db->select('');
		$this->db->where('ID', 1);
		$this->db->from('tblhome');
		$data = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->where('Type', 'service');
		$this->db->from('tblservices');
		$data['services'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->where('Type', 'client');
		$this->db->from('tblservices');
		$data['clients'] = $this->db->get()->result_array();

		$this->load->view('fe/home', $data);
    }

	public function technology() {
		$this->load->view('fe/technology');
	}
    public function technologynew() {
		$this->load->view('fe/technology1');
	}
    public function wasteManagement() {
		$this->db->select('*');
		$this->db->where('ID', 1);
		$this->db->from('tblwaste');
		$data = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->where('Type', 'waste');
		$this->db->from('tblservices');
		$data['services'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->where('Type', 'waste-portfolio');
		$this->db->from('tblresources');
		$data['images'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->where('Type', 'waste stream');
		$this->db->from('tblservices');
		$data['streams'] = $this->db->get()->result_array();

        $this->load->view('fe/waste-management', $data);
	}
	
	public function radiological() {
		$this->db->select('');
		$this->db->where('ID', 1);
		$this->db->from('tblradiological');
		$data = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->where('Type', 'capability');
		$this->db->from('tblservices');
		$data['capabilities'] = $this->db->get()->result_array();

		$this->load->view('fe/radiological', $data);
	}

	public function normtenorm() {
		$this->db->select('');
		$this->db->where('ID', 1);
		$this->db->from('tblnorm');
		$data = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->where('Type', 'solution');
		$this->db->from('tblservices');
		$data['solutions'] = $this->db->get()->result_array();

		$this->load->view('fe/normtenorm', $data);
	}

	public function resource() {
		$this->db->select('*');
        $this->db->where('Type', 'document');
        $this->db->from('tblresources');
		$data['documents'] = $this->db->get()->result_array();
		
		$this->load->view('fe/resource', $data);
	}

	public function careers() {
		$this->db->select('');
		$this->db->where('ID', 1);
		$this->db->from('tblcareer');
		$data = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->where('Type', 'benefit');
		$this->db->from('tblservices');
		$data['benefits'] = $this->db->get()->result_array();

		$this->db->select('*');
        $this->db->from('tbljobs');
		$data['jobs'] = $this->db->get()->result_array();
		
		$this->load->view('fe/careers', $data);
	}

    public function aboutUs() {
		$this->db->select('*');
		$this->db->where('ID', 1);
		$this->db->from('tblaboutus');
		$data = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->where('Type', 'portfolio');
		$this->db->from('tblresources');
		$data['images'] = $this->db->get()->result_array();

		$this->db->select('*');
		$this->db->where('Type', 'client');
		$this->db->from('tblservices');
		$data['clients'] = $this->db->get()->result_array();

        $this->load->view('fe/about-us', $data); 
	}

	public function contactUs() {
		$this->db->select('*');
        $this->db->from('tblcontactus');
		$data = $this->db->get()->row_array(); 
		
		$this->load->library('googlemaps');		

		$config['center'] = '35.210948, -99.979493';
		$config['zoom'] = '5';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = "35.959296, -84.369928";
		$marker['title'] = "Corporate Office";
		$marker['label'] = "Corporate Office";
		$marker['infowindow_content'] = "<p style='color : black; font-weight : bold;'>Bin Number : adgadfadf".
										"</p>Customer : agadfadfadf".
										"<br>Description : adfadf".
										"<br>Address : adfadf".
										"<br>Dispatched Date : adfadf";
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = "32.892782, -117.149587";
		$marker['title'] = "San Diego Office";
		$marker['label'] = "San Diego Office";
		$marker['infowindow_content'] = "<p style='color : black; font-weight : bold;'>Bin Number : adgadfadf".
										"</p>Customer : agadfadfadf".
										"<br>Description : adfadf".
										"<br>Address : adfadf".
										"<br>Dispatched Date : adfadf";
		
		$this->googlemaps->add_marker($marker);
		$marker = array();
		$marker['position'] = "32.22130929943654, -110.97193570063484";
		$marker['title'] = "Tucson Office";
		$marker['label'] = "Tucson Office";
		$marker['infowindow_content'] = "<p style='color : black; font-weight : bold;'>Bin Number : adgadfadf".
										"</p>Customer : agadfadfadf".
										"<br>Description : adfadf".
										"<br>Address : adfadf".
										"<br>Dispatched Date : adfadf";

		$this->googlemaps->add_marker($marker);

		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('fe/contact-us', $data);
	}

	public function sendEmail() {
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'systone.webcontacts@gmail.com',
			'smtp_pass' => 'Systoneit$',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
			);

		$this->load->library('email', $config);		

		$this->email->set_newline("\r\n");
		$this->email->from('systone.webcontacts@gmail.com', 'Contact Us');
		$this->email->to('contactus@systoneit.com');
		$this->email->subject('Contact Us');

		$cotent = "Name: <strong>".$name. "</strong><br>Phone: <strong>" . $phone . "</strong><br>Email: <strong>" .$email ."</strong><br>Message:<br><strong>". $message.'</strong>';
		$this->email->message($cotent);

		if ($this->email->send())
		{
			echo "Email was successfully sent.";
		}
		else {  
			show_error($this->email->print_debugger());
		}
	}
}
