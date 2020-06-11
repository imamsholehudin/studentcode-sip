<?php 

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        //var_dump($this->stmt->bindValue($param, $value, $type));
        // $test = 76;
        // if(is_string($test)){
        //     echo "ini string";
        // }else if (is_int($test)){
        //     echo "ini int";
        // }


        if( is_null($type) ) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    //echo "kena int";
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    //echo "kena bool";
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    //echo "kena null";
                    break;
                default :
                    $type = PDO::PARAM_STR;
                    //echo "kena string";
            }
        }
        //
        

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();

    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }



}