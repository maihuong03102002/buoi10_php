<?php
abstract class Database {
    protected $dbType;
    protected $dbHost;
    protected $dbName;
    protected $user;
    protected $password;
    protected $connect;

    public function __construct($dbHost, $dbName, $user, $password)
    {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        try{
            $connection = new PDO("$this->dbType:host=$this->dbHost;dbname=$this->dbName", $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connect = connection;
        }catch (Exception $e){
            die("Connection failed: " . $e->getMessage());
        }
    }

    abstract public function query();

    public function disconnect()
    {
        $this->conect = null;
    }
}

class MySqlDatabase extends Database {
    public function __construct($dbHost, $dbName, $user, $password)
    {
        parent::__construct($dbHost, $dbName, $user, $password);
        $this->dbType = 'mysql';
    }

    public function query()
    {
        echo "Executing MySQL query: " . $sql . PHP_EOL;

    }
}

class PortgreDatabase extends Database {
    public function __construct($dbHost, $dbName, $user, $password)
    {
        parent::__construct($dbHost, $dbName, $user, $password);
        $this->dbType = 'portgre';
    }

    public function query()
    {
        echo "Executing PostgreSQL query: " . $sql . PHP_EOL;
        
    }
}

