<?php

require '/var/www/imusic.com/public_html/index.php';

//тута должен быть шаблон но его нет

$loader = new \Twig\Loader\FilesystemLoader ( '/path/to/templates' );

$twig = new \Twig\Environment ( $loader ,[]);
