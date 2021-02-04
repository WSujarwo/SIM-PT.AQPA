<?php
class Customer extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_customer');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_customer->get_all_customer();
		$this->load->view('admin/v_customer',$x);
	}

	function simpan_customer(){
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
							$link=strip_tags($this->input->post('xlink'));
 
							$this->m_customer->simpan_customer($nama,$link,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/customer');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/customer');
	                }
	                 
	            }else{
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$link=strip_tags($this->input->post('xlink'));

					$this->m_customer->simpan_customer_tanpa_img($nama,$link);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/customer');
				}
				
	}
	
	function update_customer(){
				
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
							$link=strip_tags($this->input->post('xlink'));
							$nama=strip_tags($this->input->post('xnama'));

							$this->m_customer->update_customer($kode,$nama,$link,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/customer');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/customer');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							// $nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$link=strip_tags($this->input->post('xlink'));
							$this->m_customer->update_customer_tanpa_img($kode,$nama,$link);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/customer');
	            } 

	}

	function hapus_customer(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_customer->hapus_customer($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/customer');
	}

}