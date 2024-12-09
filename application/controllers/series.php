<?php
class series extends CI_Controller
{
    public function index()
    {
        $data['title'] = "UnseenU | Dashboard";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/user/v_series-topbar', $data);
        $this->load->view('template/user/v_series', $data);
        // $this->load->view('template/user/v_footer', $data);
    }
}
