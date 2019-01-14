<?php
class Kurir extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kurir');
        $this->load->model('m_menu');
        $this->load->model('m_order');
        $this->load->model('m_status');
	}


	function index(){
		
		$this->load->view('mobile/v_kurirlogin');
	}

	function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('email')));
        $password=strip_tags(str_replace("'", "", $this->input->post('pass')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_kurir->cek_kurir($u,$p);
        if($cadmin->num_rows > 0){
         $this->session->set_userdata('online',true);
         $this->session->set_userdata('pengguna',$u);
         $this->session->set_userdata('hakakses',3);
         $xcadmin=$cadmin->row_array();
         $this->session->set_userdata('nama_pel',$xcadmin['pengguna_nama']); 
         $this->session->set_userdata('kopel',$xcadmin['pengguna_id']); 
        }else{
                $this->session->set_userdata('online',false);
        }
        if($this->session->userdata('online')==true){
            redirect('mobile/kurir/berhasillogin');
        }else{
            redirect('mobile/kurir/gagallogin');
        }
    }

    function berhasillogin(){
        $x['data']=$this->m_menu->hot_promo();
        $this->load->view('mobile/v_kurirdashboard', $x);
            
    }

    function gagallogin(){
            $url=base_url('mobile/kurir');
            echo $this->session->set_flashdata('msg','<div class="notifications error"><i class="fa fa-exclamation-circle"></i> Email atau Password yang anda masukan salah. Mohon Check Kembali!</div>');
            redirect($url);
    }
    
    function logout(){
            $this->session->sess_destroy();
            $url=base_url('mobile/kurir');
            redirect($url);
    }

    function dataPesanan(){
        $x['kurir']=$this->session->userdata('pengguna_id');
        $x['data']=$this->m_kurir->get_all_order();
        $x['stts']=$this->m_status->get_all_status();
        $this->load->view('mobile/v_order',$x);
    }

    function update_order(){
        $kode=$this->input->post('id_inv');
        $this->m_kurir->update_order($kode,$kurir);
        redirect('kurir/berhasillogin');
    }
}