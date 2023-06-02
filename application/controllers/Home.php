<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Layanan_model");
        $this->load->model("Kontak_model");
        $this->load->model("Tentang_model");
        $this->load->model("Misi_model");
        $this->load->model("Profil_model");
        $this->load->model("Wawancara_model");
        $this->load->model("GambarLayanan_model","gbr_model");
    }

    public function index()
    {
        // Menu Layanan
        $menu_layanan = $this->Layanan_model->select();

        // Kontak
        $kontak = $this->Kontak_model->select();

        // Wawancara
        $wawancara = $this->Wawancara_model->select();

        // Tentang
        $tentang = $this->Tentang_model->select();
        $tentang[0]["tentang_singkat"] = str_replace("(PT)", "(PT)<br>", $tentang[0]["tentang_singkat"]);

        $data = [
            "title" => "Beranda",
            "menu" => $menu_layanan,
            "kontak" => $kontak,
            "tentang" => $tentang,
            "wawancara" => $wawancara
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/index');
        $this->load->view('user/template/footer');
    }

    public function tentang($link)
    {
        // Menu Layanan
        $menu_layanan = $this->Layanan_model->selectAll();

        // Kontak
        $kontak = $this->Kontak_model->select();

        // Tentang
        $tentang = $this->Tentang_model->select();
        $tentang[0]["tentang_singkat"] = str_replace("(PT)", "(PT)<br>", $tentang[0]["tentang_singkat"]);

        // Misi
        $misi = $this->Misi_model->select();

        // Profil
        $profil = $this->Profil_model->select();

        $title = str_replace("%20", " ", $link);
        $data = [
            "title" => $title,
            "link" => $link,
            "menu" => $menu_layanan,
            "kontak" => $kontak,
            "tentang" => $tentang,
            "misi" => $misi,
            "profil" => $profil,
        ];
        
        $this->load->view('user/template/header', $data);
        $this->load->view('user/tentang');
        $this->load->view('user/template/footer');
    }

    public function layanan($layananid){
        // Menu Layanan
        $menu_layanan = $this->Layanan_model->selectAll();

        // Kontak
        $kontak = $this->Kontak_model->select();

        // Deskripsi Layanan
        $layanan = $this->Layanan_model->selectID($layananid);

        // Gambar Layanan
        $gambarLayanan = $this->gbr_model->selectId($layananid);

        // Wawancara
        $wawancara = $this->Wawancara_model->selectWithLayanan($layananid);

        $data = [
            "title" => "Layanan",
            "link" => $layanan["layanan_nama"],
            "data" => $layanan,
            "menu" => $menu_layanan,
            "kontak" => $kontak,
            "wawancara" => $wawancara,
            "gambar" => $gambarLayanan,
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/layanan');
        $this->load->view('user/template/footer');
    }

}

/* End of file Home.php and path /application/controllers/Home.php */
