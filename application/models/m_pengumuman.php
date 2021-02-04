<?php
class M_pengumuman extends CI_Model{

	function get_all_pengumuman(){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,pengumuman_link,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC");
		return $hsl;
	}
	function simpan_pengumuman($judul,$deskripsi,$link){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_pengumuman(pengumuman_judul,pengumuman_deskripsi,pengumuman_link,pengumuman_author) VALUES ('$judul','$deskripsi','$link','$author')");
		return $hsl;
	}
	function update_pengumuman($kode,$judul,$deskripsi,$link){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_pengumuman SET pengumuman_judul='$judul',pengumuman_deskripsi='$deskripsi',pengumuman_link='$link',pengumuman_author='$author' where pengumuman_id='$kode'");
		return $hsl;
	}
	function hapus_pengumuman($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengumuman WHERE pengumuman_id='$kode'");
		return $hsl;
	}

	//Front-end
	function get_pengumuman_home(){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,pengumuman_link ,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit 3");
		return $hsl;
	}

	function pengumuman(){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,pengumuman_link ,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,pengumuman_link ,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit $offset,$limit");
		return $hsl;
	}

// function get_pengumuman_by_kode($kode){
// 		$hsl=$this->db->query("SELECT tbl_pengumuman.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pengumuman where pengumuman_id='$kode'");
// 		return $hsl;
// 	}
} 