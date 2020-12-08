<?php

use App\Controllers\Admin\ListController;
use App\Controllers\Admin\MyController;

require '../../bootloader.php';

$controller = new ListController();

print $controller->index();