<?php
class Mep extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_mep');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_mep->get_all_mep();
		$this->load->view('admin/v_mep',$x);
	}
	
	function simpan_mep(){
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
 
							$this->m_mep->simpan_mep($nama,$class,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/mep');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/mep');
	                }
	                 
	            }else{
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$class=strip_tags($this->input->post('xclass'));

					$this->m_mep->simpan_mep_tanpa_img($nama,$class);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/mep');
				}
				
	}
	
	function update_mep(){
				
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
							// $nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));

							$this->m_mep->update_mep($kode,$nama,$class,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/mep');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/mep');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							// $nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$class=strip_tags($this->input->post('xclass'));
							$this->m_mep->update_mep_tanpa_img($kode,$nama,$class);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/mep');
	            } 

	}

	function hapus_mep(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_mep->hapus_mep($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/mep');
	}

}