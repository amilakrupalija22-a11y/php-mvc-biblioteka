<?php
require_once "../models/Book.php";

class BookController {

    public function index() {
        $books = Book::all();
        include "../views/books/index.php";
    }

    public function create() {
        $categories = Book::getCategories();
        include "../views/books/create.php";
    }

    public function store() {
        Book::create($_POST['title'], $_POST['author'], $_POST['category_id']);
        header("Location: index.php");
    }

    public function edit() {
        $book = Book::find($_GET['id']);
        $categories = Book::getCategories();
        include "../views/books/edit.php";
    }

    public function update() {
        Book::update($_POST['id'], $_POST['title'], $_POST['author'], $_POST['category_id']);
        header("Location: index.php");
    }

    public function delete() {
        Book::delete($_GET['id']);
        header("Location: index.php");
    }
}
?>
