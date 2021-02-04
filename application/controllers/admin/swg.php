<?php
class Swg extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_swg');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_swg->get_all_swg();
		$this->load->view('admin/v_swg',$x);
	}
	
	function simpan_swg(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nama=strip_tags($this->input->post('xnama'));
							$class=strip_tags($this->input->post('xclass'));
 
							$this->m_swg->simpan_swg($nama,$class,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/swg');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/swg');
	                }
	                 
	            }else{
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$class=strip_tags($this->input->post('xclass'));

					$this->m_swg->simpan_swg_tanpa_img($nama,$class);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/swg');
				}
				
	}
	
	function update_swg(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));

							$this->m_swg->update_swg($kode,$nama,$class,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/swg');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/swg');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$class=strip_tags($this->input->post('xclass'));
							$this->m_swg->update_swg_tanpa_img($kode,$nama,$class);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/swg');
	            } 

	}

	function hapus_swg(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_swg->hapus_swg($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/swg');
	}

}