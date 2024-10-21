<?php
include '../functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    deleteBook($id);

    header("Location: index.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
