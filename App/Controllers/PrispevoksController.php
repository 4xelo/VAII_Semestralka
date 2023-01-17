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
            $meno = $this->request()->getValue('meno');
            if(!preg_match('/^[a-zA-Z]{3,15}[a-zA-Z]$/',$meno)) {//musi zacinat znakom, mat aspon 15 znakov
                echo "<script>alert('Zly format mena.');</script>";
                return false;
            }
            $prispevok->setMeno($meno);
            
            if ($this->request()->getValue('priezvisko')) {
                $priezvisko = $this->request()->getValue('priezvisko');
                if(!preg_match('/^[a-zA-Z]{3,20}[a-zA-Z]$/',$priezvisko)) {//musi zacinat znakom, mat aspon 15 znakov
                    echo "<script>alert('Zly format priezviska.');</script>";
                    return false;
                }
                $prispevok->setPriezvisko($priezvisko);
            }
            
            if ($this->request()->getValue('subject')) {
                $predmet = $this->request()->getValue('subject');
                if(!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,50}[0-9a-zA-Z]$/',$predmet)) {//musi zacinat znakom, max 50 znakov
                    echo "<script>alert('Zly format predmetu.');</script>";
                    return false;
                }
                $prispevok->setSubject($predmet);
            }
            if ($this->request()->getValue('text')) {
                $question = $this->request()->getValue('text');
                if(!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,250}[0-9a-zA-Z]$/',$question)) {//musi zacinat znakom, max 250 znakov
                    echo "<script>alert('Zly format otazky.');</script>";
                    return false;
                }
                $prispevok->setText($question);
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