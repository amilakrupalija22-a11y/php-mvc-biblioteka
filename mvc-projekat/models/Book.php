<?php
require_once "../config/database.php";

class Book {

    public static function all() {
        global $conn;
        return $conn->query("SELECT * FROM books");
    }

    public static function create($title, $author, $category_id) {
        global $conn;
        $sql = "INSERT INTO books (title, author, category_id)
                VALUES ('$title', '$author', '$category_id')";
        return $conn->query($sql);
    }

    public static function delete($id) {
        global $conn;
        return $conn->query("DELETE FROM books WHERE id=$id");
    }

    public static function update($id, $title, $author, $category_id) {
    global $conn;
    $sql = "UPDATE books SET title='$title', author='$author', category_id='$category_id' WHERE id=$id";
    return $conn->query($sql);
}

    public static function find($id) {
    global $conn;
    $result = $conn->query("SELECT * FROM books WHERE id=$id");
    return $result->fetch_assoc();
}
}
