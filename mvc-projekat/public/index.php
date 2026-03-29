<?php
require_once "../config/database.php";
require_once "../controllers/BookController.php";
require_once "../controllers/CategoryController.php";

$db = (new Database())->connect();

$controller = $_GET['controller'] ?? 'book';
$action = $_GET['action'] ?? 'index';

if ($controller == 'category') {
    $ctrl = new CategoryController($db);
} else {
    $ctrl = new BookController($db);
}

$ctrl->$action();
