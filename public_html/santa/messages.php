<?php

use App\Controllers\SantaMessagesController;

require '../../bootloader.php';

$controller = new SantaMessagesController();

print $controller->index();