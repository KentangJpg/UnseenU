<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_invoice extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function user()
    {
        $email = $this->session->userdata('email');
        $query = $this->db->get_where('user', ['email' => $email]);
        return $query->row_array();
    }

    // Insert invoice data and return the inserted ID
    public function insert_invoice($data)
    {
        $this->db->insert('invoice', $data);
        return $this->db->insert_id();
    }

    // Insert individual invoice items
    public function insert_invoice_item($data)
    {
        return $this->db->insert('invoice_items', $data);
    }

    public function tampil_data() {
        $this->db->order_by('invoice_date', 'DESC'); // Order by date descending
        $query = $this->db->get('invoice'); // Replace 'invoices' with your actual table name if different
        return $query->result();
    }

    //  // Retrieve all invoices
    //  public function get_all_invoices()
    // {
    //     $this->db->select('invoices.*, users.username');
    //     $this->db->from('invoices');
    //     $this->db->join('users', 'invoices.user_id = users.id');
    //     $this->db->order_by('invoice_date', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // // Retrieve a single invoice by ID
    // public function get_invoice_by_id($invoice_id)
    // {
    //     $query = $this->db->get_where('invoices', array('id' => $invoice_id));
    //     return $query->row();
    // }

    // // Retrieve invoice items for a specific invoice
    // public function get_invoice_items($invoice_id)
    // {
    //     $query = $this->db->get_where('invoice_items', array('invoice_id' => $invoice_id));
    //     return $query->result();
    // }
 
}
