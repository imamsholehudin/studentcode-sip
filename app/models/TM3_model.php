<?php
class TM3_model
{
    private $table1 = 'pd';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllTM3()
    {
        $this->db->query("SELECT * FROM tm3 LEFT JOIN pw ON tm3.id_pw = pw.id_pw");
        return $this->db->resultSet();
    }
}