<?php
require_once 'db.php';

$file = $_FILES['file'];
$email = $_POST['email'];
$text = $_POST['text'];



function validateComments($email, $text)
{
    $error = '';
    if($email === '') {
        $error = 'email пуст';
    }
    if ($text === '') {
        $error = 'text пуст';
    }
    return $error;
}

function addComments()
{
    $email = $_POST['email'];
    $text = $_POST['text'];
    $validation = validateComments($email, $text);
    if($validation === '') {
        addData();
        getComments();
    }
}


function getComments()
{
    $conn = mysqli_connect("localhost", "root", "root", "guestbook");
    $query = "SELECT * FROM comments ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function deleteComment()
{

    $delete = $_POST['delete'];
    if($delete) {
        deleteData();
    }
}
