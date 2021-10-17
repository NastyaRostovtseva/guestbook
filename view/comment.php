<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<div class="container d-flex justify-content-center">
    <div class="col-6">
        <h2>Оставить комментарий:</h2><br>
        <form action="../controller/comment.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Комментарий</label>
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-file">
                <input type="file" name="file" class="form-file-input" id="customFile">
                <label class="form-file-label" for="customFile">
                    <span class="form-file-text">Выбрать файл...</span>
                    <span class="form-file-button">Открыть</span>
                </label>
            </div>
            <br>
            <input class="btn btn-primary" name="id" type="submit" value="Отправить">
            <input type="hidden" name="add" value="add">
        </form>
    </div>
</div>
