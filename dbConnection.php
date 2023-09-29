<?php

class dbConnection{
    private $connection;
    private $db_type;
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_port;

    public function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS,$DB_PORT) {
        $this->db_type      = $DB_TYPE;
        $this->db_host      = $DB_HOST;
        $this->db_name      = $DB_NAME;
        $this->db_user      = $DB_USER;
        $this->db_pass      = $DB_PASS;
        $this->db_port      = $DB_PORT;
        $this->connection($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS,$DB_PORT);
    }

    public function connection($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS,$DB_PORT){
        switch ($DB_TYPE) {
            case 'MySQLi':
                if($DB_PORT<>Null){
                    $DB_HOST.=":".$DB_PORT;
                }
                $this->connection = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
                if ($this->connection->connect_error) { return "Connection failed: " . $this->connection->connect_error; }else{
                }
                break;
            case 'PDO':
                if($DB_PORT<>Null){
                    $DB_HOST.="";
                }
                try {
                    $this->connection = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e) {
                    die("Connection failed: " . $e->getMessage());
                }
                break;
        }
    }

    public function insert($table, $data){
        ksort($data);
        $fieldNames = implode('`, `',  array_keys($data));
        $fieldValues = implode("', '",  array_values($data));
        "INSERT INTO $table (`$fieldNames`) VALUES ('$fieldValues')";
    }

    public function select($sql){
        switch ($this->db_type) {
            case 'MySQLi':
                $result = $this->connection->query($sql);
                return $result->fetch_assoc();
                break;
            case 'PDO':
                $result = $this->connection->prepare($sql);
                $result->execute();
                return $result->fetchAll(PDO::FETCH_ASSOC)[0];
                break;
        }
    }


}