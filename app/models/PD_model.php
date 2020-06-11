<?php
class PD_model
{
    private $table1 = 'pd';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllPD()
    {
        $this->db->query("SELECT * FROM pd LEFT JOIN pw ON pd.id_pw = pw.id_pw");
        return $this->db->resultSet();
    }
}