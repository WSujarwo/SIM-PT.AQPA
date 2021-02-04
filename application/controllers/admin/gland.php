<?php
class Gland extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_gland');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_gland->get_all_gland();
		$this->load->view('admin/v_gland',$x);
	}
	
	function simpan_gland(){
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
							$jenis=strip_tags($this->input->post('xjenis'));
							$desc=strip_tags($this->input->post('xdesc'));
							$temp=strip_tags($this->input->post('xtemp'));
							$ph=strip_tags($this->input->post('xph'));
							$speed=strip_tags($this->input->post('xspeed'));
							$press=strip_tags($this->input->post('xpress'));
							
							$this->m_gland->simpan_gland($jenis,$desc,$temp,$ph,$speed,$press,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/gland');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/gland');
	                }
	                 
	            	}else{
			            	$jenis=strip_tags($this->input->post('xjenis'));
							$desc=strip_tags($this->input->post('xdesc'));
							$temp=strip_tags($this->input->post('xtemp'));
							$ph=strip_tags($this->input->post('xph'));
							$speed=strip_tags($this->input->post('xspeed'));
							$press=strip_tags($this->input->post('xpress'));

					$this->m_gland->simpan_gland_tanpa_img($jenis,$desc,$temp,$ph,$speed,$press);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/gland');
				}
				
	}
	
	function update_gland(){
				
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
							$jenis=strip_tags($this->input->post('xjenis'));
							$desc=strip_tags($this->input->post('xdesc'));
							$temp=strip_tags($this->input->post('xtemp'));
							$ph=strip_tags($this->input->post('xph'));
							$speed=strip_tags($this->input->post('xspeed'));
							$press=strip_tags($this->input->post('xpress'));


							$this->m_gland->update_gland($kode,$jenis,$desc,$temp,$ph,$speed,$press,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/gland');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/gland');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$jenis=strip_tags($this->input->post('xjenis'));
							$desc=strip_tags($this->input->post('xdesc'));
							$temp=strip_tags($this->input->post('xtemp'));
							$ph=strip_tags($this->input->post('xph'));
							$speed=strip_tags($this->input->post('xspeed'));
							$press=strip_tags($this->input->post('xpress'));

							$this->m_gland->update_gland_tanpa_img($kode,$jenis,$desc,$temp,$ph,$speed,$press);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/gland');
	            } 

	}

	function hapus_gland(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_gland->hapus_gland($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/gland');
	}

}