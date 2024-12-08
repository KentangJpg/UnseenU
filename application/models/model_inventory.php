<?php

class model_inventory extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_inventory()
    {
        $inventory_details = "SELECT ItemId, ItemName, Categories, Stock, COMS, Image FROM productdetails";
        $query = $this->db->query($inventory_details);
        return $query->result();
    }

    public function user()
    {
        $email = $this->session->userdata('email');
        $query = $this->db->get_where('user', ['email' => $email]);
        return $query->row_array();
    }

    public function get_data_byid($ItemId)
    {
        $this->db->where('ItemId', $ItemId);
        $query = $this->db->get('productdetails');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}
