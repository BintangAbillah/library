<?php
include '../functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    createBook($title, $author, $published_year, $genre);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Add New Book</h1>
    <form action="create.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>
        <label for="author">Author:</label>
        <input type="text" name="author" required><br>
        <label for="published_year">Published Year:</label>
        <input type="number" name="published_year"><br>
        <label for="genre">Genre:</label>
        <input type="text" name="genre"><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
