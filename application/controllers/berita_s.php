<?php
class Berita_s extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('m_tulisan');
        
  }
  function index(){
    $jum=$this->m_tulisan->berita();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=4;
        $config['base_url'] = base_url() . 'Berita_s/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
    $x['data']=$this->m_tulisan->berita_perpage($offset,$limit);
    //$x['brt']=$this->berita->beritaasc();
    $this->load->view('guru/s_berita',$x);
  }


}
