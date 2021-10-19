<?php
class Tokosepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-tokosepatu');
    }
    
    public function cetak()
    {

    $data = [
        'nama' => $this->input->post('nama'),
        'no' => $this->input->post('no'),
        'merk' => $this->input->post('merk'),
        'ukuran' => $this->input->post('ukuran'),
        'harga' => $this->input->post('harga'),
    ];

    if ($this->input->post('merk') == "nike") {
        $data['harga'] = 375000;
    }elseif ($this->input->post('merk') == "adidas") {
        $data['harga'] = 300000;
    }elseif ($this->input->post('merk') == "kickers") {
        $data['harga'] = 250000;
    }elseif ($this->input->post('merk') == "eiger") {
        $data['harga'] = 275000;
    }elseif ($this->input->post('merk') == "bucherri") {
        $data['harga'] = 400000;
    }
    
    $this->load->view('view-data-tokosepatu', $data);
    }
}