<?php

class CourseController
{
    public $course;

    public function __construct()
    {
        $this->course = new Course();
    }

    /**
     * Salva um novo curso.
     */
    public function save($name, $description)
    {
        return $this->course->save([
            'name' => $name,
            'description' => $description
        ]);
    }

    /**
     * Obtém todos os cursos.
     */
    public function getAll()
    {
        return $this->course->getAll();
    }

    /**
     * Deletar um curso
     */
    public function delete($id)
    {
        return $this->course->delete($id);
    }

    /**
     *  Obém os dados de um curso.
     */
    public function show($id)
    {
        return $this->course->show($id);
    }

    /**
     *  Atualizar os dados de um curso.
     */
    public function update($id, $name, $description)
    {
        return $this->course->update(
            $id,
            $name,
            $description
        );
    }
}
