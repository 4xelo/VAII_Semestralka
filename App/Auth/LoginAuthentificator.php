<?php

namespace App\Auth;
use App\Core\DB\Connection;
use App\Models\Admin;

class LoginAuthentificator extends DummyAuthenticator
{
    public function login($login, $password): bool
    {

//        if ($login == $password) {
//            $_SESSION['user'] = $login;
//            return true;
//        }
//        return false;

        $filter = Admin::getAll('login = ?',[$login]);

        if (count($filter) > 0) {
            foreach ($filter as $data) {
                if (password_verify($password, $data->getPassword())){
                    $_SESSION['user'] = $data->getLogin();
                    return true;
                }
            }
            echo "Zle heslo\n";
        }
        return false;
    }

    /**
     * @throws \Exception
     */
    public function register($email, $login, $pass, $cpass): bool
    {

        $maily = Admin::getAll('email = ?', [$email]);
        $loginy = Admin::getAll('login = ?', [$login]);
        if (count($maily) > 0) {
            echo "Email uz existuje";
            return false;
        }
        if (count($loginy) > 0) {
            echo 'Zadany login uz pouziva niekto iny!';
            return false;
        }

        if ($cpass !== $pass) {
            echo "Hesla sa nezhoduju";

        } else {
            $a = new Admin();
            $a->setEmail($email);
            $a->setLogin($login);
            $hashPss =  password_hash($pass,PASSWORD_DEFAULT );
            $a->setPassword($hashPss);
            $a->save();
            return true;
        }

        return false;

    }
}