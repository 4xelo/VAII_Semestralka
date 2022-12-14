<?php

namespace App\Config;

use App\Auth\DummyAuthenticator;
use App\Auth\LoginAuthentificator;

/**
 * Class Configuration
 * Main configuration for the application
 * @package App\Config
 */
class Configuration
{
    public const APP_NAME = 'Compote';
    public const FW_VERSION = '2.0';

    public const DB_HOST = 'db';  // change to db, if docker is used
    public const DB_NAME = 'semka';
    public const DB_USER = 'root';
    public const DB_PASS = 'dtb456';

    public const LOGIN_URL = '?c=home';

    public const ROOT_LAYOUT = 'root.layout.view.php';

    public const DEBUG_QUERY = false;

    public const AUTH_CLASS = LoginAuthentificator::class;
}