<?php

namespace App\Models;

class Pouzivatel extends \App\Core\Model
{

    protected $id;
    protected $email;
    protected $login;
    protected $password;
    protected $jeSpravca;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getSpravca()
    {
        return $this->jeSpravca;
    }

    /**
     * @param mixed $jeSpravca
     */
    public function setSpravca(mixed $jeSpravca): void
    {
        $this->jeSpravca = $jeSpravca ;
    }

}