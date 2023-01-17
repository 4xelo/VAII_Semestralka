<?php

namespace App\Controllers;
use App\Core\AControllerBase;
use App\Models\Login;
class LoginController extends AControllerBase {


    public function index()
    {
        return $this->html();
    }

    /**Vytiahnem najprv vsetky loginy daneho uzivatela, vratim posledny-> ten je najcersvejsi
     * @return \App\Core\Responses\JsonResponse
     */
    public function getLoginTime(): \App\Core\Responses\JsonResponse
    {
        $userId = $_SESSION['user_id'];

        try {
            $loginy =  Login::getAll('pouzivatel = ?', [$userId]);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()]);
        }

        try {
            $login = Login::getOne($loginy[count($loginy)-1]->getId());

        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()]);
        }
        return $this->json(['time' => $login->getCas()]);
    }
}