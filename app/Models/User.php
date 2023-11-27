<?php

class User
{
    private static $conn;

    public function __construct()
    {
        self::$conn = Connection::getDb();
    }

    /**
     * Salva um novo user no banco de dados.
     */
    public function save($data)
    {
        try {
            $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);

            return $stmt->execute();
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

        /**
     * Salva um novo user no banco de dados.
     */
    public function login($email, $password)    
    {
        try {
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user;
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }
}
