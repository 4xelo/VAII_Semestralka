<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\JsonResponse;
use App\Models\Prispevok;
use PDOException;

class PrispevoksController extends AControllerBase
{

    public function authorize($action) {
        switch ($action) {
            case "edit":
            case "create":
            case "store":
            case "delete":

                return ($this->app->getAuth()->isLogged());

        }
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index()
    {
        $prispevoks = Prispevok::getAll();
        return $this->html($prispevoks);
    }

    public function delete() {
        $id = $this->request()->getValue('id');

        $prispevokToDelete = Prispevok::getOne($id);
        if ($prispevokToDelete) {
            $prispevokToDelete->delete();
        }
        return $this->redirect("?c=prispevoks");
    }
    public function store() {

        $id = $this->request()->getValue('id');


        $prispevok = ( $id ? Prispevok::getOne($id) : new Prispevok());
        if ($this->request()->getValue('meno')) {
            $prispevok->setMeno($this->request()->getValue('meno'));
            if ($this->request()->getValue('priezvisko')) {
                $prispevok->setPriezvisko($this->request()->getValue('priezvisko'));
            }
            if ($this->request()->getValue('subject')) {
                $prispevok->setSubject($this->request()->getValue('subject'));
            }
            if ($this->request()->getValue('text')) {
                $prispevok->setText($this->request()->getValue('text'));
            }
        } else {
            return $this->redirect("?c=prispevoks&a=create");
        }

        $prispevok->setPouzivatel($this->app->getAuth()->getLoggedUserId());
        $prispevok->save();
        return $this->redirect("?c=prispevoks");
    }
    public function prispevok()
    {
        $id = $this->request()->getValue('id');

        try {
            $prispevok = Prispevok::getOne($id);
        } catch (PDOException|\Exception $e) {
            $prispevok = null;
        }

        if ($prispevok != null) {
            return $this->html($prispevok);
        } else {
            return $this->redirect('?c=index');
        }
    }
    public function create() {

        return $this->html(new Prispevok(), viewName: 'prispevok.form');
    }
    public function edit() {

        $id = $this->request()->getValue('id');

        $prispevok = Prispevok::getOne($id);
        return $this->html($prispevok, viewName: 'prispevok.form');
    }

    public function zoradZ(): JsonResponse
    {
        $meno = $this->request()->getValue('meno');

        $zoznam = Prispevok::getAll('meno LIKE ?',[$meno],'DESC');

        return $this->json(['data' => $zoznam]);
    }



}