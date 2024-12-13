<?php
class model_profile extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function update($email, $name, $gender, $address, $PoB, $DoB, $phone_num)
    {
        $data = [
            'name' => $name,
            'gender' => $gender,
            'address' => $address,
            'PoB' => $PoB,
            'DoB' => $DoB,
            'phone_num' => $phone_num
        ];

        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }
}
