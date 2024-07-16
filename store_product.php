<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php require_once __DIR__ . '/components/header.php'?>
<div class="container">
    <form action="core/product/store.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Title</label>
                <input type="text" class="form-control"  placeholder="Some title..." name="title">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Description</label>
                <input type="text" class="form-control" placeholder="Some description..." name="description">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Price</label>
            <input type="number" class="form-control" placeholder="Some price..." name="price">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Push</button>
    </form>

</div>

</body>
</html>