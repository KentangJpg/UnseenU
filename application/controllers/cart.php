<?php
class cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
    }
    public function index()
    {
        if (empty($this->cart->contents())) {
            redirect('index.php/series');
        }
        $data['title'] = "UnseenU | Cart";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/user/v_head', $data);
        $this->load->view('template/user/v_topbar', $data);
        $this->load->view('template/user/v_cart', $data);
        $this->load->view('template/user/v_footer', $data);
    }

    public function add()
    {
        $redirect_page = $this->input->post('redirect_page');
        $item_id = $this->input->post('id');
        $qty = $this->input->post('qty');
        $price = $this->input->post('price');
        $name = $this->input->post('name');

        $cart = $this->cart->contents();
        $item_exists = false;
        $rowid = '';

        foreach ($cart as $key => $value) {
            if ($value['id'] == $item_id) {
                $item_exists = true;
                $rowid = $value['rowid'];
                break;
            }
        }

        if ($item_exists) {
            $data = array(
                'rowid'   => $rowid,
                'qty'     => $value['qty'] + $qty,
            );
            $this->cart->UPDATE($data);
        } else {
            $data = array(
                'id'      => $item_id,
                'name'    => $name,
                'qty'     => $qty,
                'price'   => $price,
            );
            $this->cart->INSERT($data);
        }
        redirect($redirect_page, 'refresh');
    }

    function createInv()
    {
        $cart = $this->cart->contents();
        foreach ($cart as $key => $value) {
            
        }
    }

    public function delete($rowid)
    {
        $this->cart->REMOVE($rowid);
        redirect('index.php/cart');
    }

    public function update()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty'   => $this->input->post($i . '[qty]')
            );
            $this->cart->UPDATE($data);
            $i++;
        }
        redirect('index.php/cart');
    }

    public function clear()
    {
        $this->cart->destroy();
        redirect('index.php/cart');
    }
}
