<?php
include 'db.php';

function getAllBooks()
{
    global $conn;
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getBookById($id)
{
    global $conn;
    $sql = "SELECT * FROM books WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function createBook($title, $author, $published_year, $genre)
{
    global $conn;
    $sql = "INSERT INTO books (title, author, published_year, genre) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $title, $author, $published_year, $genre);
    return $stmt->execute();
}

function updateBook($id, $title, $author, $published_year, $genre)
{
    global $conn;
    $sql = "UPDATE books SET title = ?, author = ?, published_year = ?, genre = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisi", $title, $author, $published_year, $genre, $id);
    return $stmt->execute();
}

function deleteBook($id)
{
    global $conn;
    $sql = "DELETE FROM books WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
