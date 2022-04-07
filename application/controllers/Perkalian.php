<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perkalian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('tampilanperkalian');
    }

    public function perkalian()
    {
        // $a = $_POST['angka1'];
        // $b = $_POST['angka2'];
        // $jumlah = $a * $b;
        // echo "Hasil Perkalian \t";
        // echo "<input type=text step=any name=jumlah value='$jumlah'>";
        $angka1 = $this->input->post("angka1");
        $angka2 = $this->input->post("angka2");
        $jumlah = $angka1 * $angka2;
        $data['jumlah'] = $jumlah;
        $this->load->view('tampilanperkalian', $data);
    }
}
