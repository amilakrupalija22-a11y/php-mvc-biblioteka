<?php
require_once "../models/Book.php";
require_once "../models/Category.php";

class BookController {
    private $book;
    private $category;

    public function __construct($db) {
        $this->book = new Book($db);
        $this->category = new Category($db);
    }

    public function index() {
        $books = $this->book->getAll();
        include "../views/books/index.php";
    }

    public function create() {
        $categories = $this->category->getAll();

        if ($_POST) {
            $this->book->create(
                $_POST['title'],
                $_POST['author'],
                $_POST['category_id']
            );
            header("Location: index.php");
        }

        include "../views/books/create.php";
    }

    public function edit() {
        $categories = $this->category->getAll();

        if ($_POST) {
            $this->book->update(
                $_POST['id'],
                $_POST['title'],
                $_POST['author'],
                $_POST['category_id']
            );
            header("Location: index.php");
        }

        $book = $this->book->getById($_GET['id']);
        include "../views/books/edit.php";
    }

    public function delete() {
        $this->book->delete($_GET['id']);
        header("Location: index.php");
    }
}
