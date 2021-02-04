<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_portofolio');
		$this->load->model('m_customer');
		$this->load->model('m_team');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
	}
	function index(){

		$user_ip=$_SERVER['REMOTE_ADDR'];
		if ($this->agent->is_browser()){
		    $agent = $this->agent->browser();
		}elseif ($this->agent->is_robot()){
		    $agent = $this->agent->robot(); 
		}elseif ($this->agent->is_mobile()){
		    $agent = $this->agent->mobile();
		}else{
			$agent='Other';
		}
		$cek_ip=$this->m_pengunjung->cek_ip($user_ip);
		$cek=$cek_ip->num_rows();
		if($cek > 0){
			$x['galeri']=$this->m_galeri->get_galeri_home();
			$x['brt']=$this->m_tulisan->get_berita_slider();
			$x['berita']=$this->m_tulisan->get_berita_home();
			$jum=$this->m_portofolio->portofolio();
			$jum=$this->m_customer->customer();
			$jum=$this->m_team->team();
				$page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=8;
        $config['base_url'] = base_url() . 'home/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
			$x['data']=$this->m_portofolio->portofolio_perpage($offset,$limit);
			$x['cust']=$this->m_customer->customer();
			$x['team']=$this->m_team->team_perpage($offset,$limit);
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['download']=$this->m_files->get_files_home();
			$this->load->view('depan/v_home',$x);
		}else{
			$this->m_pengunjung->simpan_user_agent($user_ip,$agent);
			$x['galeri']=$this->m_galeri->get_galeri_home();
			$x['brt']=$this->m_tulisan->get_berita_slider();
			$x['berita']=$this->m_tulisan->get_berita_home();
			$jum=$this->m_portofolio->portofolio();
			$jum=$this->m_customer->customer();
			$jum=$this->m_team->team();
				$page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=3;
        $config['base_url'] = base_url() . 'home/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
			$x['data']=$this->m_portofolio->portofolio_perpage($offset,$limit);
			$x['cust']=$this->m_customer->customer();
			$x['team']=$this->m_team->team();

			
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['download']=$this->m_files->get_files_home();
			$this->load->view('depan/v_home',$x);
		}
					
	}
	// function portofolio_detail(){
	// 	$kode=$this->uri->segment(3);
	// 	$x['data']=$this->m_portofolio->get_portofolio_home($kode);
	// 	$this->load->view('depan/v_portofoliodetail',$x);
	// }


  function logout (){
    $this->load->view('logout');
  }

	
}