<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjumlahan extends CI_Controller {

	public function index()
	{
		$this->load->view('penjumlahan');
	}

    public function tambah(){
       $a= $_POST['a'];
       $b= $_POST['b'];
       
       $hasil = $a+$b;
    //    $this->load->view('tambah');
       echo "Hasil Penjumlahan : " .$hasil;
    }
}
