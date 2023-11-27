<?php

class AuthController
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Salva um novo curso.
     */
    public function save($name, $email, $password)
    {
        return $this->user->save([
            'name' => $name,
            'email' => $email,
            'password'=> $password
        ]);
    }

        /**
     * Salva um novo curso.
     */
    public function login($email, $password)
    {
        return $this->user->login(
            $email,
            $password
        );
    }
}
