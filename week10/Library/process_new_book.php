<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

function validateInput($str)
{
    $ret = trim($str);
    return $ret;
}
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

