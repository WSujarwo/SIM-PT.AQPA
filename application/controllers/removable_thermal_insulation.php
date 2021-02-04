<?php
class Removable_thermal_insulation extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_thermal');
        $this->load->model('m_customer');
	}
	function index(){
		$jum=$this->m_thermal->thermal();
        $jum=$this->m_customer->customer();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=16;
        $config['base_url'] = base_url() . 'thermal/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_thermal->thermal_perpage($offset,$limit);
        $x['cust']=$this->m_customer->customer();
		//$x['brt']=$this->berita->beritaasc();
		$this->load->view('depan/v_thermal',$x);
	}

} 