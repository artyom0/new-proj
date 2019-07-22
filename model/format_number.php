<?php

require '/var/www/imusic.com/libs/rb/rb.php';

session_start();

R::setup('mysql:host=imusic.com;dbname=im','admin','890960');

function format_to_int($oldnum, &$newnum){
    if( strripos($oldnum, '+'))
        $plus = 1;

    $oldnum = str_replace(array('+', ' ', '(' , ')', '-'), '', $oldnum);

    if($plus)
        $oldnum += 10000000000;

    $newnum = $oldnum;
}
