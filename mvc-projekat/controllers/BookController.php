<?php
require_once "../models/Book.php";

class BookController {

    public function index() {
        $books = Book::all();
        include "../views/books/index.php";
    }

    public function create() {
        include "../views/books/create.php";
    }

    public function store() {
        Book::create($_POST['title'], $_POST['author'], $_POST['category_id']);
        header("Location: index.php");
    }

    public function delete() {
        Book::delete($_GET['id']);
        header("Location: index.php");
    }
}
