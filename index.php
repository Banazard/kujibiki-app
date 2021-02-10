<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <title>くじ引きアプリ</title>
</head>
<body>
<!-- Bootstrap JavaScript -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <div class="container">
        <h1>くじ引きアプリ</h1>
        <form action="index.php" method="POST">
            <div class="form-group col-md-6 col-lg-6 mx-auto">
                <label for="name" class="col-md-2 col-lg-2">くじの名前</label>
                <div>
                    <input type="text" id="name" name="kuji-name" class="form-control">
                </div>
            </div>
            <div class="form-group col-md-6 col-lg-6 mx-auto">
                <label for="" class="col-md-2 col-lg-2">要素1</label>
                <input type="text" id="element1" name="elements[]" class="form-control">
            </div>
            <div class="form-group col-md-6 col-lg-6 mx-auto">
                <label for="" class="col-md-2 col-lg-2">要素2</label>
                <input type="text" id="element1" name="elements[]" class="form-control">
            </div>
            <div class="form-group col-md-6 col-lg-6 mx-auto">
                <label for="" class="col-md-2 col-lg-2">要素3</label>
                <input type="text" id="element1" name="elements[]" class="form-control">
            </div>
            <div class="col-md-4 col-lg-4 mx-auto">
                <input type="submit" class="btn btn-primary btn-block" value="実行">
            </div>
        </form>
        <?php
            print @$_POST['kuji-name'] . " ";
            $elements = @$_POST["elements"];
            shuffle($elements);
            echo $elements[0];
            
            //for ($i = 0; $i < count($elements); $i++) {
            //    echo $elements[$i]. " ";
            //} 
            
            
        ?>
    </div>
    
</body>    
</html>