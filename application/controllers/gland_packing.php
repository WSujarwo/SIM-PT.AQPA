<?php
class Gland_packing extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_gland');
        $this->load->model('m_customer');
	}
	function index(){
		$jum=$this->m_gland->gland();
        $jum=$this->m_customer->customer();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=30;
        $config['base_url'] = base_url() . 'gland_packing/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_gland->gland();
        $x['cust']=$this->m_customer->customer();
		//$x['brt']=$this->berita->beritaasc();
		$this->load->view('depan/v_gland',$x);
	}

    function gland_detail(){
        $kode=$this->uri->segment(3);
        // $this->db->query("UPDATE tbl_glandpacing SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
        $x['data']=$this->m_gland->get_gland_by_kode($kode);
        $x['cust']=$this->m_customer->customer();
        $this->load->view('depan/v_glanddetail',$x);
    }

} 