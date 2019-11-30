<?php
class C_Dangdan_Montir extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Dangdan_Montir');
        $this->load->library('form_validation','session');
        $this->load->helper(array('form','url'));
    }
    public function index(){
        $data['judul'] = 'Home Montir';
        if($this->session->userdata('logged_in')){
          $data['montir']= $this->M_Dangdan_Montir->getDataServiceMontir($this->session->userdata('id_montir'));
        }
        $this->load->view('Montir/Header Montir',$data);
        $this->load->view('Montir/Home Montir',$data);
    }

    public function loginMontir(){
      $data['judul'] = 'Login Montir';
      $this->load->view('Montir/Login Form Montir',$data);
    }

    public function SigninMontir() {
      $email_montir = $this->input->post('email_montir',TRUE);
      $password = md5($this->input->post('password',TRUE));

      $validateMontir = $this->M_Dangdan_Montir->validateMontir($email_montir,$password);
      if($validateMontir->num_rows() == 1){
        $data  = $validateMontir->row_array();
        $email = $data['email_montir'];
        $id_montir = $data['id_montir'];
        $newdata = array(
          'email' => $email,
          'id_montir' => $id_montir,
          'logged_in' => TRUE
          );
          $this->session->set_userdata($newdata);
          $data['judul'] = 'Home Montir';
          $data['montir']= $this->M_Dangdan_Montir->getDataServiceMontir($newdata['id_montir']);
          $this->load->view('Montir/Header Montir',$data);
          $this->load->view('Montir/Home Montir',$data);
        }
        else{
          $this->session->set_flashdata('alert','Fail Login');
          redirect('C_Dangdan_Montir/loginMontir');
        }
    }

    public function ubahDataService($id){
      $data['judul'] = "Ubah Data Service";
      $this->load->view('Montir/Header Montir');
      $data['service'] = $this->M_Dangdan_Montir->getServiceById($id);
      $this->load->view('Montir/ubah Data Service',$data);
    }

    public function prosesUbahService($id){
      $data['biaya'] = set_value('biaya');
      $data['tanggal_selesai'] = set_value('tanggal_selesai');
      $data['status'] = set_value('status');
      $this->M_Dangdan_Montir->ubahDataService($id,$data);
      $data['montir']= $this->M_Dangdan_Montir->getDataServiceMontir($this->session->userdata('id_montir'));
      redirect('C_Dangdan_Montir');
    }

    public function Logout() {
      $this->session->sess_destroy();
      redirect('C_Dangdan_Montir/loginMontir');
    }

    public function returnStatus(){
        return true;
    }

}
?>