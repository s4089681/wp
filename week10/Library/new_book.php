<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

function validateInput($str)
{
    $ret = trim($str);
    return $ret;
}

if (isset($_POST['title'])) {
    $title = validateInput($_POST['title']);
    $author = validateInput($_POST['author']);
    $genre = validateInput($_POST['genre']);
    $published = validateInput($_POST['published']);
    $description = validateInput($_POST['description']);

    include('includes/db_connect.inc');

    $sql = "INSERT INTO book (title, author, genre, published, description) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssis", $title, $author, $genre, $published, $description);

    $stmt->execute();
}
?>
<?php
$title = "Add New Book";
include('includes/header.inc');
?>
<h1>Welcome to the Library</h1>
<?php
include('includes/nav.inc');
?>
<h2>Add New Book</h2>
<form action="new_book.php" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required><br>
    <label for="author">Author</label>
    <input type="text" name="author" id="author" required><br>
    <label for="genre">Genre</label>
    <input type="text" name="genre" id="genre" required><br>
    <label for="published">Year</label>
    <input type="number" name="published" id="published" required min="1900" max="2021" size="4"><br>
    <label for="description">Synopsis</label>
    <br>
    <textarea rows="10" cols="50" name="description" id="description" required></textarea><br>
    <input type=submit value="Add New Book">
</form>
<?php
include('includes/footer.inc');
?>
