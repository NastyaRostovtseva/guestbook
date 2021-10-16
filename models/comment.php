<?php
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


function addTxtComments($email, $text, $file)
{
    $fileText = 'text.txt';
    $date = date("Y-m-d H:i:s");
    $validate = validateComments($email, $text);
    if($validate === '' && $_POST) {
        $comment = $email . '|' . $text . '|' . $file['name'] . '|'. $date . ' *** ';
        file_put_contents($fileText, PHP_EOL . $comment, FILE_APPEND);
    } else {
        echo $validate;
    }
}


function getComments()
{
        $filename = 'text.txt';
        $comments = file_get_contents($filename);
        $comment = explode('***', $comments);
        array_pop($comment);
        return array_reverse($comment);

}


function getFormatComment($comment)
{
    return (explode('|', $comment));
}


addTxtComments($email, $text, $file);


