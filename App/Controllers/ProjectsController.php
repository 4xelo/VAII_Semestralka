<?php

namespace App\Controllers;

use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;
use App\Models\Project;
use PDOException;

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
                return ($this->app->getAuth()->isLogged() && $this->app->getAuth()->isSpravca());

            case "filter":
                return true;
        }
        return true;
    }
    public function showProject() :Response {

        $id = $this->request()->getValue('id');
        $project = Project::getOne($id);

        return $this->json(['project' => $project]);
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
        $id = $this->request()->getValue('id');

        try {
            $project = Project::getOne($id);
        }
        catch (PDOException|\Exception $e)  {
            $project = null;
        }

        if ($project != null) {
            return $this->html($project);
        } else {
            return $this->redirect('?c=projects');
        }


    }

    public function delete() {
        $id = $this->request()->getValue('id');

        $projectToDelete = Project::getOne($id);
        if ($projectToDelete) {
            $img = $projectToDelete->getImg();
            unlink("public/images".$img);
            $projectToDelete->delete();
        }
        return $this->redirect("?c=projects");
    }

    /** vracia vyfiltrovane zaznamy projektov
     * @return JsonResponse
     * @throws \Exception
     */
    public function filter() :JsonResponse
    {

        $title = $this->request()->getValue('title');

        if ($title == null) {
            $filteredProjects = Project::getAll();
        }else {
            $title = '%'. $title . '%'; //pre pozrenie filtra
            //$title =  $title . '%'; ofiko
            $filteredProjects  = Project::getAll('title LIKE ?', [$title]);
        }
        $spravca = (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1);

        return $this->json(['data' => $filteredProjects, 'spravca' => $spravca]);
    }

    public function store() {

        $id = $this->request()->getValue('id');


        $project = ( $id ? Project::getOne($id) : new Project());
        if ($this->request()->getValue('title')) {
            $project->setTitle($this->request()->getValue('title'));
            if ($this->request()->getValue('projdesc')) {
                $project->setPrjdesc($this->request()->getValue('projdesc'));
            }
            if ($this->request()->getValue('technologies')) {
                $project->setTechnologies($this->request()->getValue('technologies'));
            }
            if(isset($_FILES['image'])) {
                $file_name = $_FILES['image']['name'];
                $file_tmp =$_FILES['image']['tmp_name'];
                $path = "public/images/".$file_name;
                move_uploaded_file($file_tmp,$path);
                $project->setImg($path);
            } else {
                $file_name = "bloc_logo_small_1.png";
                $path = "public/images/".$file_name;
                $project->setImg($path);
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