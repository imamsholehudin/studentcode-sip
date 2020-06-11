<?php
class PC_model
{
    private $table1 = 'pd';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllPC()
    {
        $this->db->query("SELECT * FROM pc LEFT JOIN pd ON pc.id_pd = pd.id_pd");
        return $this->db->resultSet();
    }
}