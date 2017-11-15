<?php
header('Access-Control-Allow-Origin: *');
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
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
    	}
    // loading main page
	public function index()
		{		
			// $this->load->library('calendar');
			$data = $this->init->initPath ('/home');
			$this->load->view('pages/home', $data);
			//$this->load->view('pages/upload_form', array('error' => ' ' ));
		}
       // loading main page
    public function index2()
        {       
            // $this->load->library('calendar');
            $data = $this->init->initPath ('/index');
            $this->load->view('pages/index', $data);
            //$this->load->view('pages/upload_form', array('error' => ' ' ));
        }
        
            // loading profile
    public function profile()
        {       
            // $this->load->library('calendar');
            $data = $this->init->initPath ('/index');
            $this->load->view('pages/profile', $data);
            //$this->load->view('pages/upload_form', array('error' => ' ' ));
        }
        



}
