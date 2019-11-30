<?php
class M_Dangdan_Montir extends CI_model{

    public function validateMontir($email_montir,$password)
    {
        $this->db->where('email_montir',$email_montir);
        $this->db->where('password',$password);
        $result = $this->db->get('montir',1);
        return $result;
    }

    public function getDataServiceMontir($data){
        $sql = "SELECT * FROM detail_service JOIN montir USING(id_montir) JOIN service USING(id_service) JOIN motor USING(nopol) JOIN customer USING(no_ktp) WHERE id_montir=$data";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getServiceById($id)
	{
		$this->db->where('id_service',$id);
		return $this->db->get('detail_service')->result();
    }

    public function ubahDataService($id,$data){
        try{
            $this->db->where('id_service',$id)->limit(1)->update('detail_service', $data);
            return true;
           }catch(Exception $e){}
    }
}
?>