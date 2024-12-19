<?php 

class model_dashboard extends CI_Model {
  public function total_amount()
  {
      $this->db->select_sum('total_amount');
      $query = $this->db->get('invoice');
      return $query->row()->total_amount;
  }
  
    // public function get_total_payment_earnings()
    // {
    //     $this->db->select_sum('payment_amount');
    //     $query = $this->db->get('payments');
    //     return $query->row()->payment_amount;
    // }
}

?>

