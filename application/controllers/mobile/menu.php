<?php
class Menu extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_menu');
		$this->load->model('m_order');
		$this->load->model('m_kategori');
		$this->load->library('upload');
	}


	function index(){
		$x['judul']="ALL MENU";
		$x['data']=$this->m_menu->hot_promo();
		$this->load->view('mobile/v_menu',$x);
	}
	function obatluar(){
		$x['judul']="OBAT LUAR";
		$x['data']=$this->m_menu->obat_luar();
		$this->load->view('mobile/v_menu',$x);
	}
	function obatdalam(){
		$x['judul']="OBAT DALAM";
		$x['data']=$this->m_menu->obat_dalam();
		$this->load->view('mobile/v_menu',$x);
	}

	function detail_menu(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_menu->detail_menu($kode);
		$this->load->view('mobile/v_detail_menu',$x);
	}

	function add_to_cart(){
		$kode=$this->uri->segment(4);
		$produk=$this->m_menu->detail_menu($kode);
		$i=$produk->row_array();
		$data = array(
               'id'      => $i['menu_id'],
               'qty'     => 1,
               'price'   => $i['menu_harga_baru'],
               'name'    => $i['menu_nama'],
               'image'	=> $i['menu_gambar']
               
            );

		$this->cart->insert($data); 
		redirect('mobile/menu/cart');
	}

	function cart(){
		$this->load->view('mobile/v_cart');
	}

	function remove(){
		$row_id=$this->uri->segment(4);
		$this->cart->update(array(
               'rowid'      => $row_id,
               'qty'     => 0
            ));
		redirect('mobile/menu/cart');
	}
	function update(){
		$this->cart->update($_POST);
        redirect('mobile/menu/cart');
	}

	function check_out(){
		if($this->session->userdata('online') !=TRUE){
	            $url=base_url('mobile/member');
	            redirect($url);
            }else{
            	$no_invoice=$this->m_order->get_invoice();
				$total=$this->cart->total();
				$this->session->set_userdata('no_invoice',$no_invoice);
				$order_proses=$this->m_order->order_produk($no_invoice,$total);
				if($order_proses){
					$this->cart->destroy();
					redirect('mobile/menu/sukses');
				}else{
					redirect('mobile/menu/cart');
				}
            }
		
	}
	function sukses(){
        $x['data']=$this->m_order->get_all_rekening();
		
		$this->load->view('mobile/v_rekening',$x);
        
	}

	function transfer_bank(){
		$x['data']=$this->m_order->get_all_rekening();
		
		$this->load->view('mobile/v_rekening',$x);
	}

	function set_pembayaran(){
		$no_invoice=$this->session->userdata('no_invoice');
		
		$pem_id=$this->uri->segment(4);
		$d=$this->m_order->get_rekening($pem_id);
		$q=$d->row_array();
		$rek_id=$q['rek_id'];
		$rek_no=$q['rek_no'];
		$rek_bank=$q['rek_bank'];
		$rek_nama=$q['rek_nama'];
		$rek_cabang=$q['rek_cabang'];
		$this->m_order->set_pembayaran_transfer($no_invoice,$rek_id,$rek_no,$rek_bank,$rek_nama,$rek_cabang);
		redirect('mobile/menu/cetak_invoice');
	}
	function cetak_invoice(){
		$no_invoice=$this->session->userdata('no_invoice');
		$x['data']=$this->m_order->get_checkout($no_invoice);
		
		$this->load->view('mobile/v_invoice',$x);
	}


}