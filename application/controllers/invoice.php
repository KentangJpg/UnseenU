<?php
class invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_invoice');
        $this->load->database();
    }
        

    public function index()
	{
		//page title
		$data['title'] = "UnseenU | Invoice";
		//fetch user data
		$data['user'] = $this->model_invoice->user();
		//fetch items for inventory
		$data['invoice'] =  $this->db->GET('invoice')->result();

		$this->load->view('template/v_inventory-sidebar', $data);
		$this->load->view('template/v_topbar', $data);
		$this->load->view('v_invoice', $data);
	}
}
