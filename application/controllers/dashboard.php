<?php
class dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_chart');
	}
	public function index()
	{
		$data['title'] = "UnseenU | Dashboard";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/v_dashboard-sidebar', $data);
		$this->load->view('template/v_topbar', $data);
		$this->load->view('v_dashboard');
	}

	public function chart_data()
	{
		$data = $this->model_chart->chart_database();
		echo json_encode($data);
	}
}
