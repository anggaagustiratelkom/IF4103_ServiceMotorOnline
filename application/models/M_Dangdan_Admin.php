<?php
class M_Dangdan_Admin extends CI_model{

    public function validateAdmin($username_admin,$password)
    {
        $this->db->where('username_admin',$username_admin);
        $this->db->where('password',$password);
        $result = $this->db->get('admin',1);
        return $result;
    }

    public function tambahDataSparepart($data){
        try{
            $this->db->insert('spareparts', $data);
            return true;
          }catch(Exception $e){}
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

    public function gambar($id){
        $this->db->where('id_barang',$id);
        return $this->db->get('spareparts')->row();
    }
    
    public function ubahDataSparepart($id,$data){
        try{
            $this->db->where('id_barang',$id)->limit(1)->update('spareparts', $data);
            return true;
           }catch(Exception $e){}
    }

    public function hapusDataSparepart($id)
	{
		$this->db->where('id_barang',$id);
		return $this->db->delete('spareparts');
    }


    public function hapusDataMontir($id)
	{
		$this->db->where('nip',$id);
		return $this->db->delete('montir');
    }
    public function getAllMontir(){
        $this->db->select('*');
        $this->db->from('montir');
        $data = $this->db->get();
        return $data->result();
    }

    public function getMontirById($id)
	{
		$this->db->where('nip',$id);
		return $this->db->get('montir')->result();
    }
    
    public function tambahDataMontir(){
        $data = [
            "nip" => $this->input->post('nip', true),
            "nama_montir" => $this->input->post('nama_montir', true),
            "alamat_montir" => $this->input->post('alamat_montir',true),
            "email_montir" => $this->input->post('email_montir', true), 
            "password" => md5($this->input->post('password', true)),
            "telpon_montir" => $this->input->post('telpon_montir',true),         
        ];
        return $this->db->insert('montir',$data);
    }

    public function getIdAdmin($data){
        $sql = "SELECT * FROM admin WHERE id=$data";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function ubahDataAdmin(){
        $data = [
            "username_admin" => $this->input->post('username_admin', true),          
        ];
        $this->db->where('id',$id);
        return $this->db->update('admin',$data); 
    }

}
?>