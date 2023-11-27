<?php

class Student
{
    private static $conn;

    public function __construct()
    {
        self::$conn = Connection::getDb();
    }

    /**
     * Salva um novo aluno no banco de dados.
     */
    public function save($data)
    {
        try {
            $query = "INSERT INTO students (name, cpf, birthdate, birthplace, nationality, email) VALUES (:name, :cpf, :birthdate, :birthplace, :nationality, :email)";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':cpf', $data['cpf']);
            $stmt->bindParam(':birthdate', $data['birthdate']);
            $stmt->bindParam(':birthplace', $data['birthplace']);
            $stmt->bindParam(':nationality', $data['nationality']);
            $stmt->bindParam(':email', $data['email']);

            return $stmt->execute();
        } catch (\PDOException $e) {
            var_dump($e);
            die;
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Obtém todos os alunos do banco de dados.
     */
    public function getAll()
    {
        try {
            $query = "SELECT * FROM students";
            $stmt = self::$conn->prepare($query);

            $stmt->execute();
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $students;
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Obtém todos os dados de um aluno.
     */
    public function show($id)
    {
        try {
            $query = "SELECT * FROM students WHERE id = :id";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $students = $stmt->fetch(PDO::FETCH_ASSOC);

            return $students;
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Apaga um aluno do banco de dados.
     */
    public function delete($studentId)
    {
        try {
            $query = "DELETE FROM students WHERE id = :id";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':id', $studentId, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Atualiza um aluno no banco de dados.
     */
    public function update($data)
    {
        try {
            $query = "UPDATE students SET name = :name, cpf = :cpf, birthdate = :birthdate, birthplace = :birthplace, nationality = :nationality, email = :email WHERE id = :id";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':cpf', $data['cpf']);
            $stmt->bindParam(':birthdate', $data['birthdate']);
            $stmt->bindParam(':birthplace', $data['birthplace']);
            $stmt->bindParam(':nationality', $data['nationality']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':id', $data['id']);

            return $stmt->execute();
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }
}
