<?php
class model_customer extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $query = $this->db->insert('customer', $data);
        return $query;
    }
}
