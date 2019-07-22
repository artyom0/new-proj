<?php

//для авторизации
session_start();

//для шаблонов
require_once '/var/www/imusic.com/vendor/autoload.php' ;

//работа с бд
require '/var/www/imusic.com/libs/rb/rb.php';


if ($_REQUEST['user'])
    header('Location: /');
else
    header('Location: signup/index.php');

?>