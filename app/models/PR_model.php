<?php
class PR_model
{
    private $table1 = 'pd';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllPR()
    {
        $this->db->query("SELECT * FROM pr LEFT JOIN pc ON pr.id_pc = pc.id_pc LEFT JOIN pd ON pr.id_pd = pd.id_pd");
        return $this->db->resultSet();
    }
}