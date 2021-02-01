<?php
    $kuji_name = $_GET['kuji-name'];
    $elements = $_GET['elements'];
    echo $kuji_name;
    echo $elements;
    
?>
<!DOCTYPE html>
<html lang = "ja">

<head>
    <meta charset = "UFT-8">
    <title>くじ引き結果</title>
</head>
<body>
    <h1>くじ引き結果</h1>
    <form action = "index.php" method = "get">
        <input type = "text" name ="comment/"><br/>
        <input type = "submit" value ="送信/">
    </form>
</body>
</html>