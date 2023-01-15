<?php
namespace App\Models;

use App\Core\Model;

class Prispevok extends Model {

    protected $id;
    protected $meno;
    protected $priezvisko;
    protected $subject;
    protected $text;
    protected $pouzivatel;

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
    public function getMeno()
    {
        return $this->login;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param mixed $priezvisko
     */
    public function setPriezvisko($priezvisko): void
    {
        $this->priezvisko = $priezvisko;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed subject
     */
    public function setEmail($subject): void
    {
        $this->subject = $subject;
    }
    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }
    /**
     * @return mixed
     */
    public function getPouzivatel()
    {
        return $this->pouzivatel;
    }

    /**
     * @param mixed text
     */
    public function setPouzivatel($pouzivatel): void
    {
        $this->pouzivatel = $pouzivatel;
    }

}