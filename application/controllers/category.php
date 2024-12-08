<?php
class category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "UnseenU | Category";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select_max('category_id');
        $query = $this->db->get('category');
        $last = $query->row_array();

        if ($last && $last['category_id'] != null) {
            $next = $last['category_id'] + 1;
        } else {
            $next = 1;
        }

        $data['categories'] = $this->db->get('category')->result();
        $data['next'] = $next;

        $this->load->view('template/v_category-sidebar', $data);
        $this->load->view('template/v_topbar', $data);
        $this->load->view('v_category', $data);
    }

    public function addNewCatg()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('catg', 'Category', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['show_modal'] = true; // Flag to show the modal
            $this->load->view('template/v_sidebar', $data);
            $this->load->view('template/v_topbar', $data);
            $this->load->view('v_category', $data);
        } else {
            // Process form submission (save category to database)
            $data = [
                'category_id' => $this->input->post('category_id'),
                'category' => $this->input->post('catg')
            ];
            $this->db->insert('category', $data);

            // Redirect or load success message
            redirect('index.php/category');
        }
    }
}
