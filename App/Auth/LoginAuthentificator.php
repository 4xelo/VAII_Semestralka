<?php

namespace App\Auth;
use App\Models\Admin;

class LoginAuthentificator extends DummyAuthenticator
{
    public function login($login, $password): bool
    {
        if ($login == $password) {
            $_SESSION['user'] = $login;
            return true;
        }
        return false;
    }

    public function register($email, $login, $pass, $cpass): bool
    {
        $filter = Admin::getAll("email > ?", [$email]);
        print($filter);


        if ($cpass !== $pass) {
            echo "Hesla sa nezhoduju";
        }

        else {
            $a = new Admin();
            $a->setEmail($email);
            $a->setLogin($login);
            $a->setPassword($pass);
            $a->save();
            return true;
        }
        return false;

    }
}