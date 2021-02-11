<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <title>くじ引き結果</title>
</head>
<body>
<!-- Bootstrap JavaScript -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <div class="container">
        
        <h1><?php echo @$_POST['kuji-name']; ?>のくじ引き結果</h1>
        <br>
        <?php
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