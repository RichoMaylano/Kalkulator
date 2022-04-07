<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembagian extends CI_Controller {

	public function index()
	{
		$this->load->view('pembagian');
	}

    public function bagi(){
       $a= $_POST['a'];
       $b= $_POST['b'];
       
       $hasil = $a/$b;
    //    $this->load->view('tambah');
       echo "Hasil Pembagian : " .$hasil;
    }
}
