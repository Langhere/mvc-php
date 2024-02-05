<?php

class Mahasiswa_model{

    private $table = 'mahasiswa';
    private $db;
    public function __construct(){
        $this->db = new Database();
    }


    public function getAll(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mhs= ' . $id); // Remove extra colon
        // $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $semester = $data['semester'];
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('','$nama', '$alamat', '$semester')
        ";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
}