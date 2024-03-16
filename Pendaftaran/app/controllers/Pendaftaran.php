<?php
class Pendaftaran extends Controller
{
    public function index()
    {
   
        $data['judul']='Pendaftaran';
        $data['pdf']=$this->model('Pendaftaran_model')->getAllPendaftaran();
        $this->view('templates/header',$data);
        $this->view ('pendaftaran/index',$data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul']='Detail';
        $data['pdf']=$this->model('Pendaftaran_model')->getPendaftaranById($id);
        $this->view('templates/header',$data);
        $this->view('pendaftaran/detail',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Pendaftaran_model')->tambahDataLomba($_POST)>0)
    {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pendaftaran');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/pendaftaran');
            exit;
        }
    }
    public function hapus($id)
    {
        if($this->model('Pendaftaran_model')->hapusDataLomba($id)>0)
    {
        Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pendaftaran');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/pendaftaran');
            exit;
        }
    }
  
    public function getubah(){
        echo json_encode($this->model('Pendaftaran_model')->getPendaftaranById($_POST['id']));
    }

    public function ubah(){
        if($this->model('Pendaftaran_model')->ubahDataLomba($_POST)>0)
        {
            Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/pendaftaran');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header('location: ' . BASEURL . '/pendaftaran');
                exit;
            }
    }

    public function cari(){
        $data['judul']='Pendaftaran';
        $data['pdf']=$this->model('Pendaftaran_model')->cariDataPeserta();
        $this->view('templates/header',$data);
        $this->view ('pendaftaran/index',$data);
        $this->view('templates/footer');
    }
    }

