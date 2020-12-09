<?php

use App\App;
use Core\FileDB;

require '../bootloader.php';

/**
 * If you open /install.php page, all data from db.json is deleted;
 */

App::$db = new FileDB(DB_FILE);

App::$db->createTable('users');
App::$db->insertRow('users', [
    'name' => 'Santa',
    'surname' => 'Santa',
    'email' => 'santa@santa.lt',
    'password' => 'santa',
]);
App::$db->insertRow('messages', [
    'name_surname' => 'Name Surname',
    'email' => 'santa@santa.lt',
    'phone' => 87654321,
    'text' => 'Message to Santa'
]);
App::$db->createTable('wishes');