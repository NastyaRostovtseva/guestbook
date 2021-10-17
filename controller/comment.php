<?php
require_once '../models/comment.php';
require_once '../models/db.php';

if($_POST && $_POST['add']) {
    $email = $_POST['email'];
    $text = $_POST['text'];
    $file = $_FILES['file'];
    addComments();
    header('Location: ../index.php');
} elseif($_POST && $_POST['delete']) {
    deleteComment();
    deleteData();
}
