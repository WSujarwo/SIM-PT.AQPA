<?php
class Expansion extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_expansion');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_expansion->get_all_expansion();
		$this->load->view('admin/v_expansion',$x);
	}
	
	function simpan_expansion(){
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
 
							$this->m_expansion->simpan_expansion($nama,$class,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/expansion');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/expansion');
	                }
	                 
	            }else{
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$class=strip_tags($this->input->post('xclass'));

					$this->m_expansion->simpan_expansion_tanpa_img($nama,$class);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/expansion');
				}
				
	}
	
	function update_expansion(){
				
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

							$this->m_expansion->update_expansion($kode,$nama,$class,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/expansion');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/expansion');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$class=strip_tags($this->input->post('xclass'));
							$this->m_expansion->update_expansion_tanpa_img($kode,$nama,$class);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/expansion');
	            } 

	}

	function hapus_expansion(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_expansion->hapus_expansion($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/expansion');
	}

}