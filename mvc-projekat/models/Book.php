<?php
class Book {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        return $this->conn->query("
            SELECT books.*, categories.name AS category
            FROM books
            LEFT JOIN categories ON books.category_id = categories.id
        ");
    }

    public function create($title, $author, $category_id) {
        $stmt = $this->conn->prepare("
            INSERT INTO books (title, author, category_id)
            VALUES (?, ?, ?)
        ");
        return $stmt->execute([$title, $author, $category_id]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM books WHERE id=?");
        return $stmt->execute([$id]);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM books WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $title, $author, $category_id) {
        $stmt = $this->conn->prepare("
            UPDATE books SET title=?, author=?, category_id=?
            WHERE id=?
        ");
        return $stmt->execute([$title, $author, $category_id, $id]);
    }
}
