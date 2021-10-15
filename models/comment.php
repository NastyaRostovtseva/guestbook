<?php
require_once '../view/comment.php';

$file = $_FILES['file'];
$email = $_POST['email'];
$text = $_POST['text'];

function commentsValidate($email, $text)
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


function commentsAddTxt($email, $text, $file)
{
    $fileText = '../text.txt';
    $date = date("Y-m-d H:i:s");
    $validate = commentsValidate($email, $text);
    if(empty($validate)) {
        $comment = $email . '|' . $text . '|' . $file['name'] . '|'. $date . ' *** ';
        file_put_contents($fileText, PHP_EOL . $comment, FILE_APPEND);
    } else {
        echo $validate;
    }
}


function commentsAdd($email, $text)
{
    $validate = commentsValidate($email, $text);
    if(empty($validate)) {
        $filename = '../text.txt';
        echo (file_get_contents($filename));

    }
    return false;
}


commentsAddTxt($email, $text, $file);
commentsAdd($email, $text);


