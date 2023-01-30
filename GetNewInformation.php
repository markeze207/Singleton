<?php


use Singleton\Singleton;

$class = Singleton::getInstance();
$class->setMessage('World Hello');
echo '<br><br>New <br>Data - '.$class->getDate().'<br>Other Message - '.$class->getMessage();
