<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Pouzivatel;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    /*public function authorize($action)
    {
        switch ($action) {
            case "contact":
                return true;
            default:
                return $this->app->getAuth()->isLogged();
        }
    }*/
    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index()
    {
        return $this->html();
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function contact() {
        return $this->html();
    }
    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function about() {
        return $this->html();
    }
    public function prispevok() {
        return $this->html();
    }

    /**
     * @param $userId
     * @return Response
     * @throws \Exception
     */
    public function getId($userId) : Response
    {
        $login = Pouzivatel::getOne($userId);
        if ($login !== null) {
            return $this->json($login->getLogin());
        }
        return $this->html();
    }
}