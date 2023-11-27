<?php

class StudentController
{
    public $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    /**
     * Salva um novo aluno.
     */
    public function save($name, $cpf, $birthdate, $birthplace, $nationality, $email)
    {
        return $this->student->save([
            'name' => $name,
            'cpf' => $cpf,
            'birthdate' => $birthdate,
            'birthplace' => $birthplace,
            'nationality' => $nationality,
            'email' => $email
        ]);
    }

    /**
     * Obtém todos os alunos.
     */
    public function getAll()
    {
        return $this->student->getAll();
    }

    /**
     * Deletar um curso
     */
    public function delete($id)
    {
        return $this->student->delete($id);
    }

    /**
     *  Obém os dados de um aluno
     */
    public function show($id)
    {
        return $this->student->show($id);
    }

    /**
     *  Atualizar os dados de um aluno.
     */
    public function update($id, $name, $cpf, $birthdate, $birthplace, $nationality, $email)
    {
        return $this->student->update([
            'id' => $id,
            'name' => $name,
            'cpf' => $cpf,
            'birthdate' => $birthdate,
            'birthplace' => $birthplace,
            'nationality' => $nationality,
            'email' => $email
        ]);
    }
}
