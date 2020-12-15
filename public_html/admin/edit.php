<?php

use App\Controllers\Admin\WishesController;

require '../../bootloader.php';

$controller = new WishesController();

print $controller->indexEdit();



