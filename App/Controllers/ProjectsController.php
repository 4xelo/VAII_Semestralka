<?php

namespace App\Controllers;

use App\Models\Project;

class ProjectsController extends \App\Core\AControllerBase
{

    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        switch ($action) {
            case "edit":
            case "create":
            case "store":
            case "delete":
                return $this->app->getAuth()->isLogged();

        }
        return true;
    }
    /**
     * @inheritDoc
     */
    public function index()
    {
        $projects = Project::getAll();
        return $this->html($projects);
    }
    public function project() {
        return $this->html();
    }

    public function delete() {

        $id = $this->request()->getValue('id');


        $projectToDelete = Project::getOne($id);
        if ($projectToDelete) {
            $projectToDelete->delete();
        }
        return $this->redirect("?c=projects");//po vymazani prvku sa vratim do zoznamu projectov
    }
    public function store() {

        $id = $this->request()->getValue('id');


        $project = ( $id ? Project::getOne($id) : new Project());
        if ($this->request()->getValue('title')) {
            $project->setTitle($this->request()->getValue('title'));
            if ($this->request()->getValue('projdesc')) {
                $project->setPrjdesc($this->request()->getValue('projdesc'));
                if ($this->request()->getValue('technologies')) {
                    $project->setTechnologies($this->request()->getValue('technologies'));
                }
            }
        } else {
            return $this->redirect("?c=projects&a=create");
        }

        $project->save();
        return $this->redirect("?c=projects");

    }
    public function create() {

        return $this->html(new Project(), viewName: 'create.form');
    }

    public function edit() {

        $id = $this->request()->getValue('id');

        $projectToEdit = Project::getOne($id);
        return $this->html($projectToEdit, viewName: 'create.form');
    }

}