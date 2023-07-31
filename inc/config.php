<?php

define('DB_NAME', 'recall');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

if (!defined('ABSPATH')){
    define('ABSPATH', __DIR__);
}

if (!defined('DBAPI')){
    define('DBAPI', ABSPATH . '/conexao.php');
}
