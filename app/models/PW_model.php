<?php
class PW_model
{
    private $table = 'pw';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllPW()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataPW($data)
    {

        $query = "INSERT INTO pw VALUES	(:id_pw, :nama, :alamat)";

        $this->db->query($query);
        $this->db->bind('id_pw', $data['id_pw']);
        $this->db->bind('nama', $data['nama_pw']);
        $this->db->bind('alamat', $data['alamat_pw']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}