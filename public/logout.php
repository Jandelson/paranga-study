<?php

require __DIR__ . '/../vendor/autoload.php';

use Controller\authUserController;

$loginUser = new authUserController;

$loginUser->Logout();