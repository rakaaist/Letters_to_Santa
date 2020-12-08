<?php

use App\Controllers\SantaController;

require '../../bootloader.php';

$controller = new SantaController();

print $controller->index();