<?php
class C_Dangdan_Admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_Dangdan_Admin');
        $this->load->library('form_validation','session');
        $this->load->helper(array('form','url'));
    }
    public function index(){
    $data['judul'] = 'Home';
    $this->load->view('Admin/Header Admin',$data);
    $this->load->view('Admin/tambahMontir',$data);
    }

    public function loginAdmin(){
      $data['judul'] = 'Login Admin';
      $this->load->view('Admin/Login Form Admin',$data);
    }

    public function sparepartAdmin(){
      $data['judul'] = 'Tambah Sparepart';
      $this->load->view('Admin/Header Admin',$data);
      $this->load->view('Admin/tambah Sparepart',$data);
    }

    public function tambahSparepart(){
      $judul['judul'] = 'Tambah Sparepart';
      $this->load->view('Admin/Header Admin',$judul);
      $config = [
          'upload_path' => './images/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 3000, 'max_width' => 1920,
          'max_height' => 1080
      ];
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload()){
          // $error = array('error' => $this->upload->display_error());
          // $this->load->view('C_Dangdan_Admin/tambahSparepart',$error);
      }else{
          $file = $this->upload->data();
          $data = [
          'nama' => set_value('nama'),
          'gambar' => $file['file_name'],
          'deskripsi' => set_value('deskripsi'),
          'harga' => set_value('harga'),
          ];
          $this->M_Dangdan_Admin->tambahDataSparepart($data);
          $this->session->set_flashdata('alert','ditambahkan');
          redirect('C_Dangdan_Admin/tampilSparepart');
      }  
    }

    public function SigninAdmin() {
      $this->load->model('M_Dangdan_Admin');
      $username_admin = $this->input->post('username_admin',TRUE);
      $password = md5($this->input->post('password',TRUE));

      $validateAdmin = $this->M_Dangdan_Admin->validateAdmin($username_admin,$password);
      if($validateAdmin->num_rows() == 1){
        $data  = $validateAdmin->row_array();
        $username_admin = $data['username_admin'];
        
        $newdata = array( 
          'username_admin' => $username_admin,
          'logged_in' => TRUE
          );
          $this->session->set_userdata($newdata);
          redirect('C_Dangdan_Admin/sparepartAdmin');
        }
        else{
          $this->session->set_flashdata('alert','Fail Login');
          redirect('C_Dangdan_Admin/loginAdmin');
        }
    }

    public function Logout() {
      $this->session->sess_destroy();
      redirect('C_Dangdan_Admin/loginAdmin');
    }

    public function tampilSparepart(){
      $data['judul'] = 'Crud Sparepart';
      $this->load->view('Admin/Header Admin',$data);
      $data['spareparts']=$this->M_Dangdan_Admin->getAllSparepart();
      $this->load->view('Admin/tampil Sparepart',$data); 
    }

    public function ubahSparepart($id){
      $this->load->view('Admin/Header Admin');
      $data['spareparts'] = $this->M_Dangdan_Admin->getSparepartById($id);
      $this->load->view('Admin/ubah Sparepart',$data);
    }

    public function proses_ubah($id){
      $gambar = $this->M_Dangdan_Admin->gambar($id);
      if(isset($_FILES["userfile"]["name"])){
          $config = [
              'upload_path' => './images/',
              'allowed_types' => 'gif|jpg|png',
              'max_size' => 3000, 'max_width' => 1920,
              'max_height' => 1080
          ];
          $this->load->library('upload', $config);
          if(!$this->upload->do_upload()){
              // $error = array('error' => $this->upload->display_errors());
              // $this->load->view('admin/ubah_film',$error);
          }else{
              $file = $this->upload->data();
              $data = ['gambar' =>$file['file_name']];
              unlink('images/'.$gambar->gambar);
          }
      }
      $data['nama'] = set_value('nama');
      $data['deskripsi'] = set_value('deskripsi');
      $data['harga'] = set_value('harga');
      $this->M_Dangdan_Admin->ubahDataSparepart($id,$data);
      redirect('C_Dangdan_Admin/sparepartAdmin');
    }
    public function hapusSparepart($id){
      $this->M_Dangdan_Admin->hapusDataSparepart($id);
      $this->session->set_flashdata('hapus','dihapus');
      redirect('C_Dangdan_Admin/tampilSparepart');
    }

    public function registrasiMontir(){
      $data['judul'] = 'Tambah Montir';
      $this->load->view('Admin/Header Admin',$data);
      $this->load->view('Admin/tambahMontir',$data);
    }

    public function tambahMontir(){
      $data['judul'] = 'Tambah Montir';
      $this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[montir.nip]');
      $this->form_validation->set_rules('nama_montir', 'nama_montir', 'required');
      $this->form_validation->set_rules('alamat_montir', 'alamat_montir', 'required');
      $this->form_validation->set_rules('email_montir', 'email_montir', 'required|is_unique[montir.email_montir]');
      $this->form_validation->set_rules('password', 'password', 'required');  
      $this->form_validation->set_rules('telpon_montir', 'telpon_montir', 'required|is_unique[montir.telpon_montir]');    
      if ($this->form_validation->run()==FALSE){
        $this->load->view('Admin/tambahMontir');
        $this->session->set_flashdata('fail','gagal');
        redirect('C_Dangdan_Admin/registrasiMontir');
      }else{
        $this->M_Dangdan_Admin->tambahDataMontir();
        $this->session->set_flashdata('alert', 'Berhasil');
        redirect('C_Dangdan_Admin/registrasiMontir');
      }
    }

public function hapusMontir($id){
      $this->M_Dangdan_Admin->hapusDataMontir($id);
      $this->session->set_flashdata('hapus','dihapus');
      redirect('C_Dangdan_Admin/tampilMontir');
    }

public function tampilMontir(){
      $data['judul'] = 'Daftar Montir';
      $this->load->view('Admin/Header Admin',$data);
      $data['montir']=$this->M_Dangdan_Admin->getAllMontir();
      $this->load->view('Admin/tampil montir',$data);  
    }
    
    public function kelola_akun(){
      $data['judul'] = 'Form Kelola Akun';
      $data['akun'] = $this->M_Dangdan_Admin->getIdAdmin($this->session->userdata('id'));
      $this->load->view('Admin/Header Admin',$data);
      $this->load->view('Admin/profil',$data);
    }
  }