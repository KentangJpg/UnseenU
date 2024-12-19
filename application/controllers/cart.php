<?php
class cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_invoice'); // Load the Invoice model
        $this->load->library('cart'); // Ensure the cart library is loaded
        $this->load->library('form_validation'); // Load form validation library
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
         // Validate form inputs
         $this->form_validation->set_rules('paymentMethod', 'Payment Method', 'required|in_list[credit_card,paypal]');

         if ($this->form_validation->run() == FALSE) {
             // Validation failed, redirect back with errors
             $this->session->set_flashdata('error', validation_errors());
             redirect('cart'); // Adjust the redirect as needed
         } else {
             // Gather form data
             $paymentMethod = $this->input->post('paymentMethod');
 
             // For demonstration, we'll assume payment is always successful
             $paymentSuccess = true;
 
             if ($paymentSuccess) {
                 // Prepare invoice data
                 $invoiceData = array(
                     'invoice_date'  => date('Y-m-d H:i:s'),
                     'total_amount'  => $this->cart->total(),
                     'status'        => 'Paid',
                     'payment_method'=> $paymentMethod,
                 );
 
                 // Save invoice and get the inserted ID
                 $invoice_id = $this->model_invoice->insert_invoice($invoiceData);
 
                 if ($invoice_id) {
                     // Save invoice items
                     foreach ($this->cart->contents() as $item) {
                         $itemData = array(
                             'invoice_id'   => $invoice_id,
                             'item_id'      => $item['id'],
                             'item_name'    => $item['name'],
                             'qty'          => $item['qty'],
                             'price'        => $item['price'],
                             'subtotal'     => $item['subtotal']
                         );
                         $this->model_invoice->insert_invoice_item($itemData);
                     }
 
                     // Clear the cart
                     $this->cart->destroy();
 
                     // Set success message
                     $this->session->set_flashdata('success', 'Payment successful! Your invoice has been generated.');
                     redirect('cart'); // Adjust the redirect as needed
                 } else {
                     // Invoice insertion failed
                     $this->session->set_flashdata('error', 'There was an error processing your payment. Please try again.');
                     redirect('cart');
                 }
             } else {
                 // Payment failed
                 $this->session->set_flashdata('error', 'Payment failed. Please try again.');
                 redirect('cart');
             }
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
