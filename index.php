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
                <input type="submit" class="button" value="入力内容を表示">
            </div>
        </form>
        <div>
            <form action="add-element.php" method="POST">
                <input type="submit" class="button" value="要素を増やす">
            </form>
        </div>
        <?php
            print @$_POST['kuji-name'] . " ";
            for ($i = 0; $i < count(@$_POST["elements"]); $i++) {
                echo @$_POST["elements"][$i]. " ";
            } 
            
            
        ?>
    </div>
    
</body>    
</html>