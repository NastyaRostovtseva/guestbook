<?php
require_once 'view/comment.php';
require_once 'models/comment.php';
require_once 'models/db.php';


$arrComments = getComments();


?>


<?php foreach ($arrComments as $key => $comment): ?>




<div class="container d-flex justify-content-center">
    <div class="col-6">
    <hr>
<div>
    <p>Автор: <?php echo $comment['email']?></p>
    <p>Комментарий: <?php echo $comment['text']?></p>
    <p>Время: <?php echo $comment['date']?></p>
    <form action="controller/comment.php" method="post">
        <button type="button" value="" name="id" class="btn btn-outline-danger">Удалить</button>
        <input type="hidden" name="delete" value="delete">
    </form>
</div>
    <hr>
    </div>
</div>
<?php endforeach;?>

