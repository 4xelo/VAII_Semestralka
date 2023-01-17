<?php

namespace App\Auth;
use App\Config\Configuration;
use App\Core\DB\Connection;
use App\Core\IAuthenticator;
use App\Models\Login;
use App\Models\Pouzivatel;
use PDO;
use \App\Core\DB;
use PDOException;

class LoginAuthentificator implements IAuthenticator
{

    public function __construct()
    {
        session_start();
    }

    /**
     * @throws \Exception
     */
    function login($login, $password): bool
    {
        $user = Pouzivatel::getAll('login = ?', [$login]);

        if (count($user) == 0) {
            echo"<script>alert('Pouzivatel s danym loginom neexistuje!');</script>";
            return false;
        }

        if (password_verify($password, $user[0]->getPassword())) {
            $_SESSION['user_login'] = $user[0]->getLogin();
            $_SESSION['user_id'] = $user[0]->getId();
            $_SESSION['user_type'] = $user[0]->getSpravca();
            echo "success";

            $time = new Login();

            $time->setPouzivatel($_SESSION['user_id']);
            $time->save();

            return true;
        } else {
            echo"<script>alert('Nespravne heslo!');</script>";
            return false;
        }
    }

    function logout(): void
    {
        if (isset($_SESSION["user_login"]) || isset($_SESSION['user_id']) || isset($_SESSION['user_type'])) {
            unset($_SESSION["user_name"]);
            unset($_SESSION["user_id"]);
            unset($_SESSION["user_type"]);
            session_destroy();
        }
    }
    /**
     * @throws \Exception
     */
    public function register($email, $login, $pass, $cpass): bool
    {

        $maily = Pouzivatel::getAll('email = ?', [$email]);
        $loginy = Pouzivatel::getAll('login = ?', [$login]);
        if (count($maily) > 0) {
            echo"<script>alert('Zadany email uz existuje!');</script>";
            return false;
        }

        if (count($loginy) > 0) {
            echo"<script>alert('Zadany login uz pouziva niekto iny!');</script>";
            return false;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo"<script>alert('Zly format emailu.');</script>";
            return false;
        }
        if ($cpass !== $pass) {
            echo"<script>alert('Hesla sa nezhoduju.');</script>";
            return false;

        } else {
            $user = new Pouzivatel();
            $user->setEmail($email);
            $user->setLogin($login);

            $hashPss =  password_hash($pass,PASSWORD_DEFAULT );
            $user->setPassword($hashPss);

            $emailArr = explode("@",$email);
            $emailVer = "@" . $emailArr[1];

            if (strpos($emailVer, '@compote.eu') !== false) {
                $user->setSpravca(1);

            }else {
                $user->setSpravca(0);

            }
            $user->save();
            return true;
        }
    }

    function getLoggedUserName(): string
    {
        return isset($_SESSION['user_login']) ? $_SESSION['user_login'] : throw new \Exception("Pouzivatel not logged in");
    }

    function getLoggedUserId(): mixed
    {
        return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : throw new \Exception("Pouzivatel not logged in");

    }

    function getLoggedUserContext(): mixed
    {
        return null;
    }

    function isLogged(): bool
    {
        return isset($_SESSION['user_login']) && $_SESSION['user_login'] != null;
    }

    function isSpravca(): bool
    {//1=true
        return isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1;
    }
}