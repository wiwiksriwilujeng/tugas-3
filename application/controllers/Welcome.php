<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_pertama');
		}
	public function index()
	{
		$data = $this->model_pertama->getdata();
		foreach($data as $toko){
			echo  $toko->kode."  | ";
			//echo  $toko->kode_toko." | ";
			//cho  $toko->judul." | ";
			echo  $toko->status_br." | ";
			echo  $toko->harga."<br>";
			}
		//$this->load->view('welcome_message');
	}
	public function say(){
		$this->load->view('nama_saya');
	}
}
