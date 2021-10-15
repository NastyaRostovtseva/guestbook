<?php
require_once '../index.php';

$email = $_POST['email'];
$text = $_POST['text'];

function commentsValidate(string $email,string $text) : string
{
    $errors = '';
    $textLen = mb_strlen($text);
    if($_POST) {
        if($email !== '' && $text !== '') {
            if ($textLen < 10 || $textLen > 140) {
                $errors = 'Комментарий от 10 до 140 символов!';
            }
        }
        $errors = 'Заполните поля!';
    }
    return $errors;
}

function commentsAddTxt(string $email,string $text) : bool
{
    $fileText = '../text.txt';
    $date = date("F j, Y, g:i a");
    if(commentsValidate($email, $text)) {
        $comment = $email . ' *** ' . $text . ' *** ' . $date . ' *** ';
//        var_dump($comment);die;
        file_put_contents($fileText, PHP_EOL . $comment, FILE_APPEND);
    }
    return false;
}


//function commentsAdd(string $email,string $text) : bool
//{
//    if(commentsValidate($email, $text)) {
//
//    }
//    r
//}


commentsAddTxt($email, $text);
//commentsAdd($email, $text);


