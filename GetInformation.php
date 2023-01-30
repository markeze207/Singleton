<?php

use Singleton\Singleton;

$class = Singleton::getInstance();
echo 'Data - '.$class->getDate().'<br>Message - '.$class->getMessage();