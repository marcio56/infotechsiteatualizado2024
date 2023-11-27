<?php

class Course
{
    private static $conn;

    public function __construct()
    {
        self::$conn = Connection::getDb();
    }

    /**
     * Salva um novo curso no banco de dados.
     */
    public function save($data)
    {
        try {
            $query = "INSERT INTO courses (name, description) VALUES (:name, :description)";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':description', $data['description']);

            return $stmt->execute();
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Obtém todos os cursos do banco de dados.
     */
    public function getAll()
    {
        try {
            $query = "SELECT * FROM courses";
            $stmt = self::$conn->prepare($query);

            $stmt->execute();
            $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $courses;
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Obtém todos os dados de um curso.
     */
    public function show($id)
    {
        try {
            $query = "SELECT * FROM courses WHERE id = :id";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $courses = $stmt->fetch(PDO::FETCH_ASSOC);

            return $courses;
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Apaga um curso do banco de dados.
     */
    public function delete($courseId)
    {
        try {
            $query = "DELETE FROM courses WHERE id = :id";
            $stmt = self::$conn->prepare($query);

            $stmt->bindParam(':id', $courseId, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }

    /**
     * Atualiza um curso no banco de dados.
     */
    public function update($courseId, $name, $description)
    {
        try {
            $query = "UPDATE courses SET name = :name, description = :description WHERE id = :id";
            $stmt = self::$conn->prepare($query);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':id', $courseId, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (\PDOException $e) {
            // Log de erro ou tratamento adequado aqui
            return false;
        }
    }
}
