<?php
include '../functions.php';
$books = getAllBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <h1>Library Books</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Published Year</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $book['id']; ?></td>
                <td><?= $book['title']; ?></td>
                <td><?= $book['author']; ?></td>
                <td><?= $book['published_year']; ?></td>
                <td><?= $book['genre']; ?></td>
                <td>
                    <a href="update.php?id=<?= $book['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?= $book['id']; ?>" onclick="return confirmDelete()">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="create.php">Add New Book</a>
</body>
</html>
