<?php

class model_item extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_item()
    {
        $item_details = "SELECT ItemId, ItemName, Categories, Price, Image FROM ProductDetails";
        $query = $this->db->query($item_details);
        return $query->result();
    }

    public function addItem($add)
    {
        $query = $this->db->insert('productdetails', $add);
        return $query;
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

    public function deleteItem($id)
    {
        $this->db->where('ItemId', $id);
        $deleteItem = $this->db->delete('productdetails');
        return $deleteItem;
    }
}
