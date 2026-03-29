<?php
require_once "../models/Category.php";

class CategoryController {
    private $category;

    public function __construct($db) {
        $this->category = new Category($db);
    }

    public function index() {
        $categories = $this->category->getAll();
        include "../views/categories/index.php";
    }
}
