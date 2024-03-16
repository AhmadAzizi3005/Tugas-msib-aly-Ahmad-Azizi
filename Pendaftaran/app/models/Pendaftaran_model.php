<?php

class Pendaftaran_model{
    private $table='daftar';
    private $db;

    public function __construct()
    {
        $this->db= new Database;
    }
    public function getAllPendaftaran()
    {
      $this->db->query('SELECT * FROM ' .$this->table);
      return $this->db->resultAll();
    }
    public function getPendaftaranById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->resultSingle();
    }
    public function tambahDataLomba($data)
    {
        $query="INSERT INTO daftar 
                    VALUES
                    ('', :nama, :nim, :fakultas, :pil_lomba, :motivasi)";
                    $this->db->query($query);
                    $this->db->bind('nama',$data['nama']);
                    $this->db->bind('nim',$data['nim']);
                    $this->db->bind('fakultas',$data['fakultas']);
                    $this->db->bind('pil_lomba',$data['pil_lomba']);
                    $this->db->bind('motivasi',$data['motivasi']);

                    $this->db->execute();
                    return $this->db->rowCount();
    }
    public function hapusDataLomba($id)
    {
        $query ="DELETE FROM daftar WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);

       $this->db->execute();
       return $this->db->rowCount(); 
    }
    
    public function ubahDataLomba($data)
    {
        $query="UPDATE daftar 
                    SET
                    nama=:nama,
                    nim=:nim,
                    fakultas=:fakultas,
                    pil_lomba=:pil_lomba,
                    motivasi=:motivasi
                    WHERE id = :id   ";
                    $this->db->query($query);
                    $this->db->bind('nama',$data['nama']);
                    $this->db->bind('nim',$data['nim']);
                    $this->db->bind('fakultas',$data['fakultas']);
                    $this->db->bind('pil_lomba',$data['pil_lomba']);
                    $this->db->bind('motivasi',$data['motivasi']);
                    $this->db->bind('id',$data['id']);

                    $this->db->execute();
                    return $this->db->rowCount();
    }
    public function cariDataPeserta()
    {
        $keyword = $_POST['keyword'];
        $query="SELECT * FROM daftar WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultAll();
    }
}