<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <title>くじ引きアプリ</title>
</head>
<body>
    <h1>くじ引きアプリ</h1>
    <div>
        <form action="index.php" method="POST">
            <div>
                <label for="name">くじの名前</label>
                <input type="text" id="name" name="kuji-name">
            </div>
            <div>
                <label for="">要素1</label>
                <input type="text" id="element1" name="elements[]">
            </div>
            <div>
                <label for="">要素2</label>
                <input type="text" id="element1" name="elements[]">
            </div>
            <div>
                <label for="">要素3</label>
                <input type="text" id="element1" name="elements[]">
            </div>
            <div>
                <input type="submit" class="button" value="実行">
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