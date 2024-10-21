<?php
include '../functions.php';

$id = $_GET['id'];
$book = getBookById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    updateBook($id, $title, $author, $published_year, $genre);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Update Book</h1>
    <form action="update.php?id=<?= $id; ?>" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= $book['title']; ?>" required><br>
        <label for="author">Author:</label>
        <input type="text" name="author" value="<?= $book['author']; ?>" required><br>
        <label for="published_year">Published Year:</label>
        <input type="number" name="published_year" value="<?= $book['published_year']; ?>"><br>
        <label for="genre">Genre:</label>
        <input type="text" name="genre" value="<?= $book['genre']; ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>