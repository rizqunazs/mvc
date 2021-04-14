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
        $query = "INSERT INTO tugas03 VALUES (NULL, :nama, :password, :jenis_kelamin, :program_studi, :keterangan, :status)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('program_studi', $data['program_studi']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('status', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id) {
        $query = "DELETE FROM tugas03 WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data) {
        $query = "UPDATE `tugas03` SET 
                    `nama` = \':nama\',
                    `password` = \':password\', 
                    `jenis_kelamin` = \':jenis_kelamin\', 
                    `program_studi` = \':program_studi\', 
                    `keterangan` = \':keterangan\', 
                    `status` = \':status\' 
                    WHERE `tugas03`.`id` = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('program_studi', $data['program_studi']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('status', $data['status']);
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