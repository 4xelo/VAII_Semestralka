<?php
namespace App\Models;

use App\Core\Model;

class Login extends Model {

    protected $id;
    protected $pouzivatel;
    protected $cas;

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
    public function getPouzivatel()
    {
        return $this->pouzivatel;
    }

    /**
     * @param mixed $pouzivatel
     */
    public function setPouzivatel($pouzivatel): void
    {
        $this->pouzivatel = $pouzivatel;
    }

    /**
     * @return mixed
     */
    public function getCas()
    {
        return $this->cas;
    }

    /**
     * @param mixed $cas
     */
    public function setCas($cas): void
    {
        $this->cas = $cas;
    }


}