<?php
class spiral_wound_gasket extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_swg');
        $this->load->model('m_customer');
	}
	function index(){
		$jum=$this->m_swg->swg();
        $jum=$this->m_customer->customer();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=12;
        $config['base_url'] = base_url() . 'swg/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_swg->swg_perpage($offset,$limit);
        $x['cust']=$this->m_customer->customer();
		//$x['brt']=$this->berita->beritaasc();
		$this->load->view('depan/v_swg',$x);
	}

} 