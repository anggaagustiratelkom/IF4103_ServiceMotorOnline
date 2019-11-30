<?php
class C_Dangdan_User extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Dangdan_User');
        $this->load->library('form_validation','session');
        $this->load->helper(array('form','url'));
    }
    public function index(){
    $data['judul'] = 'Home';
    if($this->session->userdata('logged_in')){
      $data['service']= $this->M_Dangdan_User->getDataService($this->session->userdata('no_ktp'));
    }
    $data['spareparts']= $this->M_Dangdan_User->getAllSparepart();
    $this->load->view('user/Header',$data);
		$this->load->view('user/Home',$data);
    }

    public function login(){
    $data['judul'] = 'Login';
    $this->load->view('user/Header',$data);
		$this->load->view('user/Login Form',$data);
    }

    public function tambahUser(){
      $data['judul'] = 'Form Registrasi';
      $this->form_validation->set_rules('no_ktp', 'no_ktp', 'required|is_unique[customer.no_ktp]');
      $this->form_validation->set_rules('nama_customer', 'nama_customer', 'required');
      $this->form_validation->set_rules('email_customer', 'email_customer', 'required');
      $this->form_validation->set_rules('username_customer', 'username_customer', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');  
      $this->form_validation->set_rules('jk', 'jk', 'required');
      $this->form_validation->set_rules('telpon_customer', 'telpon_customer', 'required');    
      $this->form_validation->set_rules('alamat_customer', 'alamat_customer', 'required');
      if ($this->form_validation->run()==FALSE){
        $this->session->set_flashdata('fail','gagal');
        redirect('C_Dangdan_User/registrasi');
      }else{
        $this->M_Dangdan_User->tambahDataUser();
        $this->session->set_flashdata('alert', 'Berhasil');
        redirect('C_Dangdan_User/registrasi');
      }
    }
    public function ubahUser(){
      $data['service']= $this->M_Dangdan_User->getDataService($this->session->userdata('no_ktp'));
      $id=$this->session->userdata('no_ktp');
      $this->load->view('user/Header');
      $data['service'] = $this->M_Dangdan_User->getKTP($id);
      redirect('C_Dangdan_User/kelola_akun');

    }
    public function sparepart(){
      $data['judul'] = 'Sparepart';
      $data['spareparts']= $this->M_Dangdan_User->getAllSparepart();
      $this->load->view('user/Header',$data);
      $this->load->view('user/Sparepart',$data);
    }
    public function indexDeskripsiSparepart($id){
      $data['judul'] = 'Deskripsi Sparepart';
      $data['spareparts'] = $this->M_Dangdan_User->getSparepartById($id);
      $this->load->view('user/Header',$data);
      $this->load->view('user/desSparepart',$data);
    }

    public function Signin() {
      $this->load->model('M_Dangdan_User');
      $email_customer= $this->input->post('email_customer',TRUE);
      $password = md5($this->input->post('password',TRUE));
      
      $validate = $this->M_Dangdan_User->validate($email_customer,$password);
      if($validate->num_rows() == 1){
        $data = $validate->row_array();
        $email = $data['email_customer'];
        $no_ktp = $data['no_ktp'];
        $newdata = array( 
          'email' => $email,
          'no_ktp' => $no_ktp,
          'logged_in' => TRUE
          );
          $this->session->set_userdata($newdata);
          $data['judul'] = 'Home';
          $data['service']= $this->M_Dangdan_User->getDataService($newdata['no_ktp']);
          $data['spareparts']= $this->M_Dangdan_User->getAllSparepart();
          $this->load->view('user/Header',$data);
          $this->load->view('user/Home',$data);
        }
        else{
          $this->session->set_flashdata('alert','Username atau Password salah');
          redirect('C_Dangdan_User/login');
        }
    }
    public function Logout() {
      $this->session->sess_destroy();
      redirect('C_Dangdan_User/index');
    }
    
    public function registrasi(){
      $data['judul'] = 'Registrasi';
      $this->load->view('user/Header',$data);
      $this->load->view('user/registrasi',$data);
    }

    public function updpassword(){
      $this->input->post('passLama');
      $email_customer= $this->session->userdata('email');
      $password = md5($this->input->post('passLama',TRUE));
      $validate = $this->M_Dangdan_User->validate($email_customer,$password);
      if($validate->num_rows() == 1){
        $data = $validate->row_array();
        if($this->input->post('passBaru') == $this->input->post('passKonf')){
          $data = array(
            'password'=>md5($this->input->post('passKonf'))
          );
          $this->M_Dangdan_User->update($email_customer,$data);
          }
          redirect('C_Dangdan_User/sparepart');          
      }
      else{
        redirect('C_Dangdan_User/index');
      }
    }

    public function kelola_akun(){
      $data['judul'] = 'Form Kelola Akun';
      $data['akun']= $this->M_Dangdan_User->getDataService($this->session->userdata('no_ktp'));
      $this->load->view('user/Header',$data);
      $this->load->view('user/kelola_akun',$data);
    }

    public function profile(){
        $data = konfigurasi('Profile');
        $data['get_all_userdata'] = $this->M_Dangdan_User->getKTP($this->session->userdata('no_ktp'));
    }

    public function daftarService(){
      $data['judul'] = 'Form Daftar Service';
      $data['service']= $this->M_Dangdan_User->getDataService($this->session->userdata('no_ktp'));
      $this->load->view('user/Header',$data);
      $this->load->view('user/daftar_service',$data);
    }

    public function inputMotor(){
      $data['judul'] = 'Form Input Data Motor';
      $this->load->view('user/Header',$data);
      $this->load->view('user/input motor',$data);
    }

    public function tambahMotor(){
      $data['judul'] = 'Tambah Motor';
      $this->form_validation->set_rules('no_ktp','no_ktp','required');
      $this->form_validation->set_rules('nopol','nopol','required|is_unique[motor.nopol]');
      $this->form_validation->set_rules('nama_motor','nama_motor','required');
      $this->form_validation->set_rules('jenis_motor','jenis_motor','required');
      $this->form_validation->set_rules('cc','cc','required');
      $this->form_validation->set_rules('tahun_motor','tahun_motor','required');
      if ($this->form_validation->run()==FALSE){
        $this->load->view('user/input motor');
        $this->session->set_flashdata('fail','gagal');
        redirect('C_Dangdan_User/inputMotor');
      }else{
        $this->M_Dangdan_User->tambahDataMotor();
        $this->session->set_flashdata('alert', 'Berhasil');
        redirect('C_Dangdan_User/inputMotor');
      }
    }
    
    public function inputService(){
      $data['judul'] = 'Form Daftar Service';
      $this->form_validation->set_rules('jenis_daftar', 'jenis_daftar', 'required');
      $this->form_validation->set_rules('nopol', 'nopol', 'required');
      $this->form_validation->set_rules('tanggal_service','tanggal_service','required');    
      if ($this->form_validation->run()==FALSE){
        $this->load->view('user/daftar_service');
        $this->session->set_flashdata('fail','gagal');
        redirect('C_Dangdan_User/daftarService');
      }else{

        $this->M_Dangdan_User->tambahService();
        $this->session->set_flashdata('alert', 'Berhasil');
        redirect('C_Dangdan_User/daftarService');
      }
    }
  }

?>