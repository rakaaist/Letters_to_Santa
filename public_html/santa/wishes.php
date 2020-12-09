<?php

use App\Controllers\SantaWishesController;

require '../../bootloader.php';

$controller = new SantaWishesController();

print $controller->index();