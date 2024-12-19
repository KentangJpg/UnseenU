<?php
class invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_invoice');
        $this->load->database();
    }
        

    public function invoice()
    {
        $data['title'] = "Invoice";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->model_invoice->tampil_data();
        

        $this->load->view('template/v_sidebar');
        $this->load->view('template/v_topbar', $data);
        $this->load->view('v_invoice', $data);
    }

}
