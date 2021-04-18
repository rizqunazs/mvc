<?php

class Data_Model {
    private $table = 'tugas03';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO tbl_hotel VALUES (NULL, :nama, :harga, :keterangan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        
        $this->db->bind('keterangan', $data['keterangan']);
       
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id) {
        $query = "DELETE FROM tbl_hotel WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data) {
        $query = "UPDATE `tbl_hotel` SET 
                    `nama` = \':nama\',
                    `harga` = \':harga\', 
                    
                    `keterangan` = \':keterangan\', 
                    
                    WHERE `tbl_hotel`.`id` = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('keterangan', $data['keterangan']);
        
        $this->db->query('id', $data['id']);
        $this->db->execute();
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}