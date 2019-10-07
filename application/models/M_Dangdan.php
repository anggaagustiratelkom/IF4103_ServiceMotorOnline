<?php
class M_Dangdan extends CI_model{

    public function submitCredential(){
        $data = [
            "email_customer" => $this->input->post('email_customer', true), 
            "password" => $this->input->post('password', true),
          ];
        return $this->db->insert('akun',$data);
    }

    public function setSearchCriteria($email_customer,$password)
    {
        $this->db->where('email_customer',$email_customer);
        $this->db->where('password',$password);
        $result = $this->db->get('akun',1);
        return $result;
    }

    public function validate($email_customer,$password)
    {
        $this->db->where('email_customer',$email_customer);
        $this->db->where('password',$password);
        $result = $this->db->get('customer',1);
        return $result;
    }

    public function get()
    {
        $email_customer = $this->input->post('email_customer', true);
        $data = $this->db->query("SELECT * FROM customer where email_customer = '$email_customer'");
        return $data->row_array();
    }
}
?>