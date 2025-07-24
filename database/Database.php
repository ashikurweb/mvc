<?php 
namespace Database;
use PDO;

class Database 
{
    public $connection;
    public $statement;
    
    public function __construct( $config, $username = 'valet', $password = 'valet')
    {
        $dsn = "mysql:".http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}