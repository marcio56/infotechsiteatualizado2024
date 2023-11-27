<?php

class Connection
{
    public static function getDb()
    {
        try {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=infotech;charset=utf8",
                "root",
                ""
            );

            return $conn;
        } catch (\PDOException $e) {
            echo ($e->getMessage());
        }
    }
}
