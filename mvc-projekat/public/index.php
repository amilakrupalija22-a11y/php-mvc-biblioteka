<?php
require_once "../config/database.php";
require_once "../controllers/BookController.php";

$db = (new Database())->connect();
$controller = new BookController($db);

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    default:
        $controller->index();
}
