<?php
class TM2_model
{
    private $table1 = 'pd';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllTM2()
    {
        $this->db->query("SELECT * FROM tm2 LEFT JOIN pd ON tm2.id_pd = pd.id_pd");
        return $this->db->resultSet();
    }
}
