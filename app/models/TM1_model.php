<?php
class TM1_model
{
    private $table1 = 'pd';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllTM1PC()
    {
        $this->db->query("SELECT * FROM tm1 INNER JOIN pc ON tm1.id_pcpr = pc.id_pc");
        return $this->db->resultSet();
    }

    public function getAllTM1PR()
    {
        $this->db->query("SELECT * FROM tm1 INNER JOIN pr ON tm1.id_pcpr = pr.id_pr");
        return $this->db->resultSet();
    }
}