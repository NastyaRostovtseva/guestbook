<?php
require_once 'view/comment.php';
require_once 'models/comment.php';

$arrComments = getComments();
?>


<?php foreach ($arrComments as $key => $value): ?>
<?php $comment = getFormatComment($value);
?>
    <hr>
<div>
    <p>Автор: <?php echo $comment[0]?></p>
    <p>Комментарий: <?php echo $comment[1]?></p>
    <p>Время: <?php echo $comment[3]?></p>
</div>
    <hr>
<?php endforeach;?>

