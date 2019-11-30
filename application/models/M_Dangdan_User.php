<?php
class M_Dangdan_User extends CI_model{

    public function submitCredential(){
        $data = [
            "email_customer" => $this->input->post('email_customer', true), 
            "password" => $this->input->post('password', true),
          ];
        return $this->db->insert('akun',$data);
    }

    public function getUsername($id)
    {
        $this->db->where('nik',$id);
		return $this->db->get('customer')->result();
    }

    public function validate($email_customer,$password)
    {
        $this->db->where('email_customer',$email_customer);
        $this->db->where('password',$password);
        $result = $this->db->get('customer',1);
        return $result;
    }
    
    public function validateRegistrasi($no_ktp,$email_customer,$telpon_customer){
        $this->db->where('email_customer',$email_customer);
        $this->db->where('no_ktp',$no_ktp);
        $this->db->where('telpon_customer',$telpon_customer);
        $result = $this->db->get('customer',1);
        return $result;
    }
    public function tambahDataUser(){
        $data = [
            "no_ktp" => $this->input->post('no_ktp', true),
            "nama_customer" => $this->input->post('nama_customer', true),
            "email_customer" => $this->input->post('email_customer',true),
            "username_customer" => $this->input->post('username_customer', true), 
            "password" => md5($this->input->post('password', true)),
            "jk" => $this->input->post('jk',true),
            "telpon_customer" => $this->input->post('telpon_customer',true),
            "alamat_customer" => $this->input->post('alamat_customer',true),         
        ];
        return $this->db->insert('customer',$data);
    }

    public function ubahDataUser($data,$id){
        $this->db->where($this->no_ktp,$no_ktp);
        $this->db->update($this->table. $data);
        return $this->db->affected_rows();
    }

    public function getAllSparepart(){
        $this->db->select('*');
        $this->db->from('spareparts');
        $data = $this->db->get();
        return $data->result();
    }
    public function getSparepartById($id)
	{
		$this->db->where('id_barang',$id);
		return $this->db->get('spareparts')->result();
    }

    public function getDataService($data){
        $sql = "SELECT * FROM customer JOIN motor USING(no_ktp) JOIN service USING(nopol) JOIN detail_service USING(id_service) JOIN montir USING(id_montir) WHERE no_ktp=$data";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update($email_customer, $data){
        return $this->db->update('customer', $data, array('email_customer' => $email_customer));
    }

    public function getdata($email_customer)
    {
        $this->db->where('email_customer',$email_customer);
        $result = $this->db->get('customer',1);
        return $result;
    }

    public function tambahDataMotor(){
        $data = [
            "no_ktp" => $this->input->post('no_ktp', true),
            "nopol" => $this->input->post('nopol', true),
            "nama_motor" => $this->input->post('nama_motor',true),
            "jenis_motor" => $this->input->post('jenis_motor', true), 
            "cc" => $this->input->post('cc',true),
            "tahun_motor" => $this->input->post('tahun_motor',true),      
        ];
        return $this->db->insert('motor',$data);
    }

    // public function getIdMotor($data){
    //     $sql = "SELECT * FROM motor JOIN customer USING (no_ktp) WHERE no_ktp=$data";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

    public function tambahService(){
        $data = [
            "nopol" => $this->input->post('nopol', true), 
            "jenis_daftar" => $this->input->post('jenis_daftar', true),
            "tanggal_service" => $this->input->post('tanggal_service',true),       
        ];
        return $this->db->insert('service',$data);
    }

    public function getKTP($id){
        $data = [
            "nama_customer" => $this->input->post('nama_customer', true),
            "email_customer" => $this->input->post('email_customer',true),
            "username_customer" => $this->input->post('username_customer', true), 
            "telpon_customer" => $this->input->post('telpon_customer',true),
            "alamat_customer" => $this->input->post('alamat_customer',true),         
        ];
        $this->db->where('no_ktp',$id);
        return $this->db->update('customer',$data);
    }

    public function getIdNopol($data){
        $sql = "SELECT nopol FROM customer JOIN motor USING(no_ktp) JOIN service USING(nopol) WHERE no_ktp=$data";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>