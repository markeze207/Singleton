<?php

use Singleton\Singleton;

$settings = Singleton::getInstance();
$settings->setDate('30.01.2023');
$settings->setMessage('hello world');

