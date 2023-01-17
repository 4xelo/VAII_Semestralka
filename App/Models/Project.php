<?php

namespace App\Models;

use App\Core\Model;

class Project extends Model
{
    protected $id;
    protected $title;
    protected $img;
    protected $prjdesc;
    protected $technologies;

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
    public function getProject() {
        return Project::getAll("id = ?", [$this->id]);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getPrjdesc()
    {
        return $this->prjdesc;
    }

    /**
     * @param mixed $prjdesc
     */
    public function setPrjdesc($prjdesc): void
    {
        $this->prjdesc = $prjdesc;
    }

    /**
     * @return mixed
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }

    /**
     * @param mixed $technologies
     */
    public function setTechnologies($technologies): void
    {
        $this->technologies = $technologies;
    }
}