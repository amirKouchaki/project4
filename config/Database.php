<?php


namespace app\config;

class Database
{
    private const HOST = 'localhost';
    private const USERNAME = 'root';
    private const PASSWORD = '';
    private const DATABASE_TYPE = 'mysql';
    private const DATABASE_NAME = 'project_four';
    public \PDO $connection;

    public function __construct()
    {
        $this->connect();
    }

    public function connect(): \PDO
    {
        try {
        $this->connection = new \PDO(
            self::DATABASE_TYPE.':host='.self::HOST.';dbname='.self::DATABASE_NAME,
            self::USERNAME,
            self::PASSWORD
        );
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_CLASS);
        }
        catch (\Exception $e){
            echo 'connection was not established';
        }
        return $this->connection;
    }
}