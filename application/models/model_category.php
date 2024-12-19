<?php
class model_category extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($category_data)
    {
        $query = $this->db->insert('user', $category_data);
        return $query;
    }
}
