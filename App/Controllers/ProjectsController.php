<?php

namespace App\Controllers;

use App\Models\Project;

class ProjectsController extends \App\Core\AControllerBase
{

    /**
     * @inheritDoc
     */
    public function index()
    {
        $projects = Project::getAll();
        $this->html($projects);


    }
}