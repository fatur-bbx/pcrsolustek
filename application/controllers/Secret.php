<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Secret extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Layanan_model");
        $this->load->model("GambarLayanan_model", "gbr_model");
        $this->load->model("Wawancara_model");
        $this->load->model("Projek_terlibat_model");
        $this->load->model("AboutPerusahaan_model");
        $this->load->model("Misi_model");
        $this->load->model("Tentang_model");
        $this->load->model("Kontak_model");
        $this->load->library('session');
        $this->load->library('image_lib');
    }

    private function watermark($nameofphoto, $destination)
    {
        $config['source_image'] = $destination.$nameofphoto; 
        $config['wm_text'] = 'Copyright '.date('Y').' PT. PCR Solustek';
        $config['wm_type'] = 'text';
        $config['wm_font_path'] = './system/fonts/texb.ttf';
        $config['wm_font_size'] = '16';
        $config['wm_font_color'] = '5C5C5C';
        $config['wm_vrt_alignment'] = 'middle';
        $config['wm_hor_alignment'] = 'center';
        $config['wm_padding'] = '20';
        $this->image_lib->initialize($config);
        if (!$this->image_lib->watermark()) {
            return false;
        }else{
            return true;
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['login'])) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($username == "admin" && $password == "admin") {
                    $this->session->set_userdata('idUser', 'benar');
                    header("Location: " . base_url() . "index.php/Secret/");
                } else {
                    if ($username != "admin") {
                        $this->session->set_flashdata('username', 'Username Salah');
                    }

                    if ($password != "admin") {
                        $this->session->set_flashdata('password', 'Password Salah');
                    }
                    header("Location: " . base_url() . "index.php/Secret/login");
                }
            } else if (isset($_POST['logout'])) {
                $this->session->unset_userdata('idUser');
                header("Location: " . base_url() . "index.php/Secret/login");
            }
        }
        $this->load->view('/admin/login/index');
    }

    public function index()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        $jumlahLayanan = $this->Layanan_model->countAll();
        $jumlahWawancara = $this->Wawancara_model->count();
        $jumlahProjek = $this->Projek_terlibat_model->count();
        $data = [
            "title" => "Dashboard",
            "jumlahLayanan" => $jumlahLayanan,
            "jumlahWawancara" => $jumlahWawancara,
            "jumlahProjek" => $jumlahProjek,
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/index');
        $this->load->view('/admin/template/footer');
    }

    public function layanan()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['tambahbtnsubmitlayanan'])) {
                $layanan_nama = $this->input->post('layanan_nama_tambah');
                $layanan_deskripsi = $this->input->post('layanan_deskripsi_tambah');
                if ($layanan_nama != "" && $layanan_deskripsi != "") {
                    $data = [
                        "layanan_nama" => $layanan_nama,
                        "layanan_deskripsi" => $layanan_deskripsi
                    ];
                    $this->Layanan_model->insert($data);
                    $this->session->set_flashdata('berhasil', 'Berhasil menyimpan data');
                } else {
                    $this->session->set_flashdata('gagal', 'Data masih ada yang kosong!');
                }
                header("Location: " . base_url() . "index.php/Secret/layanan");
            } else if (isset($_POST['editbtnsubmitlayanan'])) {
                $layanan_id = $this->input->post('layanan_id_edit');
                $layanan_nama = $this->input->post('layanan_nama_edit');
                $layanan_deskripsi = $this->input->post('layanan_deskripsi_edit');
                if ($layanan_nama != "" && $layanan_deskripsi != "") {
                    $data = [
                        "layanan_id" => $layanan_id,
                        "layanan_nama" => $layanan_nama,
                        "layanan_deskripsi" => $layanan_deskripsi
                    ];
                    $this->Layanan_model->update($data);
                    $this->session->set_flashdata('berhasil', 'Berhasil mengubah data!');
                } else {
                    $this->session->set_flashdata('gagal', 'Berhasil mengubah data!');
                }
                header("Location: " . base_url() . "index.php/Secret/layanan");
            } else if (isset($_POST['hapusbtnsubmitlayanan'])) {
                $layanan_id = $this->input->post('layanan_id_hapus');
                $hapus = $this->Layanan_model->delete($layanan_id);
                if ($hapus) {
                    $this->session->set_flashdata('berhasil', 'Berhasil menghapus data!');
                } else {
                    $this->session->set_flashdata('gagal', 'Berhasil menghapus data!');
                }
                header("Location: " . base_url() . "index.php/Secret/layanan");
            }
        }
        // Layanan
        $layanan = $this->Layanan_model->selectAll();

        $data = [
            "title" => "Layanan",
            "layanan" => $layanan,
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/layanan/index');
        $this->load->view('/admin/template/footer');
    }

    public function gambar_layanan($id)
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btnAddImageLayanan'])) {
                foreach ($_FILES["files"]["error"] as $key => $error) {
                    if ($error == UPLOAD_ERR_OK) {
                        $tmp_name = $_FILES["files"]["tmp_name"][$key];
                        $name = basename($_FILES["files"]["name"][$key]);
                        $data = [
                            "nama" => $name,
                            "id" => $id
                        ];
                        $this->gbr_model->insert($data);
                        $uploads_dir = "assets/main/assets/images/uploaded/layanan/";
                        move_uploaded_file($tmp_name, "$uploads_dir/$name");
                        if(!$this->watermark($name, $uploads_dir)){
                            echo "Gagal";
                            die;
                        }
                    }
                }
                $this->session->set_flashdata('berhasil', 'Berhasil memasukkan data!');
                header("Location: " . base_url() . "index.php/secret/gambar_layanan/$id");
            } else if (isset($_POST['hapusbtnsubmitgambarlayanan'])) {
                $idData = $this->input->post('gambar_layanan_id');
                $namaFile = $this->input->post('gambar_layanan_nama_file');
                $this->gbr_model->delete($idData);
                $this->session->set_flashdata('berhasil', 'Berhasil menghapus data!');
                unlink("assets/main/assets/images/uploaded/layanan/$namaFile");
                header("Location: " . base_url() . "index.php/secret/gambar_layanan/$id");
            } else if (isset($_POST['makeitsampul'])) {
                $idData = $this->input->post('makeitsampulid');
                $idLayanan = $this->input->post('makeitsampulgambar_layanan_layanan_id');
                $this->gbr_model->makeitsampul($idData, $idLayanan);
                header("Location: " . base_url() . "index.php/secret/gambar_layanan/$id");
            }
        }
        $image = $this->gbr_model->selectId($id);

        $data = [
            "title" => "Gambar Layanan",
            "image" => $image,
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/layanan/gambar');
        $this->load->view('/admin/template/footer');
    }

    public function wawancara()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['tambahbtnsubmitwawancara'])) {
                $nama = $this->input->post('wawancara_nama_tambah');
                $role = $this->input->post('wawancara_siapa_yang_diwawancara_tambah');
                $komentar = $this->input->post('komentar_tambah');
                $idLayanan = $this->input->post('layanan_tambah');
                $tmp_name = $_FILES["gambar_wawancara_tambah"]["tmp_name"];
                $name = basename($_FILES["gambar_wawancara_tambah"]["name"]);
                $uploads_dir = "assets/main/assets/images/uploaded/wawancara/";
                move_uploaded_file($tmp_name, "$uploads_dir/$name");
                if(!$this->watermark($name, $uploads_dir)){
                    echo "Gagal";
                    die;
                }
                $data = [
                    "nama" => $nama,
                    "role" => $role,
                    "komentar" => $komentar,
                    "image" => $name,
                    "idLayanan" => $idLayanan,
                ];
                $this->Wawancara_model->insert($data);
                header("Location: " . base_url() . "index.php/secret/wawancara");
            } else if (isset($_POST['editbtnsubmitwawancara'])) {
                $idLayananWhere = $this->input->post('wawancara_id_edit');
                $nama = $this->input->post('wawancara_nama_edit');
                $role = $this->input->post('wawancara_siapa_yang_diwawancara_edit');
                $komentar = $this->input->post('komentar_edit');
                $idLayanan = $this->input->post('layanan_edit');
                $namaGambarAcuan = $this->input->post('gambar_wawancara_edit_nama');
                $name = basename($_FILES["gambar_wawancara_edit"]["name"]);
                if ($name != "") {
                    unlink("assets/main/assets/images/uploaded/wawancara/$namaGambarAcuan");
                    $tmp_name = $_FILES["gambar_wawancara_edit"]["tmp_name"];
                    $uploads_dir = "assets/main/assets/images/uploaded/wawancara/";
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");
                    if(!$this->watermark($name, $uploads_dir)){
                        echo "Gagal";
                        die;
                    }
                } else {
                    $name = $namaGambarAcuan;
                }
                $data = [
                    "nama" => $nama,
                    "role" => $role,
                    "komentar" => $komentar,
                    "idLayananWhere" => $idLayananWhere,
                    "idLayanan" => $idLayanan,
                    "wawancara_gambar" => $name,
                ];
                if ($this->Wawancara_model->update($data)) {
                    header("Location: " . base_url() . "index.php/secret/wawancara");
                } else {
                    var_dump("ADA YANG SALAH");
                    die;
                }
            } else if (isset($_POST['hapusbtnsubmitwawancara'])) {
                $idLayananWhere = $this->input->post('wawancara_id_hapus');
                $namaGambarAcuan = $this->input->post('gambar_wawancara_hapus');
                unlink("assets/main/assets/images/uploaded/wawancara/$namaGambarAcuan");
                $this->Wawancara_model->delete($idLayananWhere);
                header("Location: " . base_url() . "index.php/secret/wawancara");
            }
        }
        $wawancara = $this->Wawancara_model->selectWithNameOfLayanan();
        $layanan = $this->Layanan_model->selectIDandNama();

        $data = [
            "title" => "Wawancara",
            "wawancara" => $wawancara,
            "layanan" => $layanan,
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/wawancara/index');
        $this->load->view('/admin/template/footer');
    }

    public function projek_terlibat()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['tambahbtnsubmitprojekterlibat'])) {
                $data = [
                    "nama_projek" => $this->input->post("nama_projek_tambah"),
                    "deskripsi_projek" => $this->input->post("deskripsi_projek_tambah"),
                    "layanan" => $this->input->post("layanan_tambah"),
                    "projek_owner" => $this->input->post("projek_owner_tambah"),
                    "tanggal" => $this->input->post("tanggal_pengerjaan_project_tambah")
                ];
                $this->Projek_terlibat_model->insert($data);
                header("Location: " . base_url() . "index.php/secret/projek_terlibat");
            } else if (isset($_POST['editbtnsubmitprojekterlibat'])) {
                $data = [
                    "id" => $this->input->post("projek_terlibat_id"),
                    "nama_projek" => $this->input->post("nama_projek_edit"),
                    "deskripsi_projek" => $this->input->post("deskripsi_projek_edit"),
                    "layanan" => $this->input->post("layanan_edit"),
                    "projek_owner" => $this->input->post("projek_owner_edit"),
                    "tanggal" => $this->input->post("tanggal_pengerjaan_project_edit")
                ];
                $this->Projek_terlibat_model->update($data);
                header("Location: " . base_url() . "index.php/secret/projek_terlibat");
            } else if (isset($_POST['hapusbtnsubmitprojekterlibat'])) {
                $id = $this->input->post("projek_terlibat_id_hapus");
                $this->Projek_terlibat_model->delete($id);
            }
        }

        $pt = $this->Projek_terlibat_model->select();
        $layanan = $this->Layanan_model->select();
        $data = [
            "title" => "Projek Terlibat",
            "dataproject" => $pt,
            "layanan" => $layanan,
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/projek_terlibat/index');
        $this->load->view('/admin/template/footer');
    }

    public function profil()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btnsubmitprofil'])) {
                $name1 = "";
                $name2 = "";
                $name3 = "";
                $name4 = "";
                // akte pendirian
                if ($this->input->post('profil_akte_pendirian_acuan') != $_FILES["profil_akte_pendirian"]["name"]) {
                    $namaGambarAcuan = $this->input->post('profil_akte_pendirian_acuan');
                    $tmp_name = $_FILES["profil_akte_pendirian"]["tmp_name"];
                    $name1 = basename($_FILES["profil_akte_pendirian"]["name"]);
                    $uploads_dir = "assets/main/assets/images/uploaded/profil/";
                    move_uploaded_file($tmp_name, "$uploads_dir/$name1");
                    if (file_exists("assets/main/assets/images/uploaded/profil/$namaGambarAcuan")) {
                        unlink("assets/main/assets/images/uploaded/profil/$namaGambarAcuan");
                    }
                    if(!$this->watermark($name1, $uploads_dir)){
                        echo "Gagal";
                        die;
                    }
                } else {
                    $name1 = $this->input->post('profil_akte_pendirian_acuan');
                }
                // akte perubahan
                if ($this->input->post('profil_akte_perubahan_acuan') != $_FILES["profil_akte_perubahan"]["name"]) {
                    $namaGambarAcuan = $this->input->post('profil_akte_perubahan_acuan');
                    $tmp_name = $_FILES["profil_akte_perubahan"]["tmp_name"];
                    $name2 = basename($_FILES["profil_akte_perubahan"]["name"]);
                    $uploads_dir = "assets/main/assets/images/uploaded/profil/";
                    move_uploaded_file($tmp_name, "$uploads_dir/$name2");
                    if (file_exists("assets/main/assets/images/uploaded/profil/$namaGambarAcuan")) {
                        unlink("assets/main/assets/images/uploaded/profil/$namaGambarAcuan");
                    }
                    if(!$this->watermark($name2, $uploads_dir)){
                        echo "Gagal";
                        die;
                    }
                } else {
                    $name2 = $this->input->post('profil_akte_perubahan_acuan');
                }
                // nib
                if ($this->input->post('profil_nib_acuan') != $_FILES["profil_nib"]["name"]) {
                    $namaGambarAcuan = $this->input->post('profil_nib_acuan');
                    $tmp_name = $_FILES["profil_nib"]["tmp_name"];
                    $name3 = basename($_FILES["profil_nib"]["name"]);
                    $uploads_dir = "assets/main/assets/images/uploaded/profil/";
                    move_uploaded_file($tmp_name, "$uploads_dir/$name3");
                    if (file_exists("assets/main/assets/images/uploaded/profil/$namaGambarAcuan")) {
                        unlink("assets/main/assets/images/uploaded/profil/$namaGambarAcuan");
                    }
                    if(!$this->watermark($name3, $uploads_dir)){
                        echo "Gagal";
                        die;
                    }
                } else {
                    $name3 = $this->input->post('profil_nib_acuan');
                }
                // npwp
                if ($this->input->post('profil_npwp_acuan') != $_FILES["profil_npwp"]["name"]) {
                    $namaGambarAcuan = $this->input->post('profil_npwp_acuan');
                    $tmp_name = $_FILES["profil_npwp"]["tmp_name"];
                    $name4 = basename($_FILES["profil_npwp"]["name"]);
                    $uploads_dir = "assets/main/assets/images/uploaded/profil/";
                    move_uploaded_file($tmp_name, "$uploads_dir/$name4");
                    if (file_exists("assets/main/assets/images/uploaded/profil/$namaGambarAcuan")) {
                        unlink("assets/main/assets/images/uploaded/profil/$namaGambarAcuan");
                    }
                    if(!$this->watermark($name4, $uploads_dir)){
                        echo "Gagal";
                        die;
                    }
                } else {
                    $name4 = $this->input->post('profil_npwp_acuan');
                }

                $data = [
                    "profil_nama_badan_usaha" => $this->input->post('profil_nama_badan_usaha'),
                    "profil_status_badan_usaha" => $this->input->post('profil_status_badan_usaha'),
                    "profil_alamat_badan_usaha" => $this->input->post('profil_alamat_badan_usaha'),
                    "profil_akte_pendirian" => $name1,
                    "profil_akte_perubahan" => $name2,
                    "profil_nib" => $name3,
                    "profil_npwp" => $name4,
                ];

                $this->AboutPerusahaan_model->update($data);

                header("Location: " . base_url() . "index.php/secret/profil");
            }
        }

        $data = [
            "title" => "Profil Perusahaan",
            "about" => $this->AboutPerusahaan_model->selectProfil(),
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/profil/index');
        $this->load->view('/admin/template/footer');
    }

    public function perusahaan()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btnsubmitperusahaan'])) {
                $apdet = [
                    "tentang_singkat" => $this->input->post("tentang_singkat"),
                    "tentang_deskripsi" => $this->input->post("tentang_lengkap")
                ];
                $this->AboutPerusahaan_model->updateTentangPerusahaan($apdet);
                header("Location: " . base_url() . "index.php/secret/perusahaan");
            }
        }

        $data = [
            "title" => "Tentang Perusahaan",
            "about" => $this->AboutPerusahaan_model->selectTentangPerusahaan(),
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/profil/perusahaan');
        $this->load->view('/admin/template/footer');
    }

    public function visimisi()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['tambahbtnmisi'])){
                $data=[
                    "misi_deskripsi" => $this->input->post("isi_misi_tambah")
                ];

                $this->Misi_model->insert($data);
                header("Location: " . base_url() . "index.php/secret/visimisi");
            }else if(isset($_POST['ubahbtnmisi'])){
                $data=[
                    "misi_id" => $this->input->post("misi_id_ubah"),
                    "misi_deskripsi" => $this->input->post("isi_misi_ubah")
                ];

                $this->Misi_model->update($data);
                header("Location: " . base_url() . "index.php/secret/visimisi");
            }else if(isset($_POST['hapusbtnmisi'])){
                $data=[
                    "misi_id" => $this->input->post("misi_id_hapus"),
                ];

                $this->Misi_model->delete($data);
                header("Location: " . base_url() . "index.php/secret/visimisi");
            }else if(isset($_POST['btnsubmitperusahaan'])){
                $this->Tentang_model->updatevisi($this->input->post('visi'));

                header("Location: " . base_url() . "index.php/secret/visimisi");
            }
        }

        $data = [
            "title" => "Visi Misi Perusahaan",
            "about" => $this->Misi_model->select(),
            "visi" => $this->Tentang_model->select(),
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/profil/visimisi');
        $this->load->view('/admin/template/footer');
    }

    public function kontak()
    {
        if ($this->session->userdata('idUser') == null) {
            header("Location: " . base_url() . "index.php/Secret/login");
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['btnnomorhp'])){
                $this->Kontak_model->update1($this->input->post('kontak_nomor_hp'));
            }else if(isset($_POST['btnnomorwa'])){
                $this->Kontak_model->update2($this->input->post('kontak_whatsapp'));
            }else if(isset($_POST['btnemail'])){
                $this->Kontak_model->update3($this->input->post('kontak_email'));
            }else if(isset($_POST['btnig'])){
                $this->Kontak_model->update4($this->input->post('kontak_ig'));
            }

            header("Location: " . base_url() . "index.php/secret/kontak");
        }

        $data = [
            "title" => "Kontak Perusahaan",
            "about" => $this->Kontak_model->select(),
        ];

        $this->load->view('/admin/template/header', $data);
        $this->load->view('/admin/profil/kontak');
        $this->load->view('/admin/template/footer');
    }
}

/* End of file Secret.php and path /application/controllers/Secret.php */