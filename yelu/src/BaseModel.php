<?php
namespace Coppel\Yelu;

class BaseModel
{
    public function __construct()
    {

    }

    public function getConnection()
    {
        $host = Yelu::$config->database->host;
        $dbname = Yelu::$config->database->database;
        $user = Yelu::$config->database->user;
        $password = Yelu::$config->database->password;

        $dsn = "mysql:host=$host;dbname=$dbname";

        return new \PDO(
            $dsn,
            $user,
            $password,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ]
        );
    }
}
