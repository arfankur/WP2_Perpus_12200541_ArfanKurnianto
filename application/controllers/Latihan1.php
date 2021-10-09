<?php

class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Halo nama saya Arfan Kurnianto";
        //$this->load->view('view-latihan1');
    }
 public function penjumlahan($n1 = null, $n2 = null)
    {
        // $this->load->model('Model_latihan1');
     $data['nilai1'] = $n1;
     $data['nilai2'] = $n2;
     $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
     $this->load->view('view-latihan1', $data);
     
    }
}
?>