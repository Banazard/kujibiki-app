<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <title>くじ引き結果</title>
    </head>
    <body>
        <header>
            <h1 class="font-weight-normal">PHP</h1>    
        </header>

        <main>
            <h1>入力内容を表示しています</h1>
            
            <pre>
            <!-- ここにphpを記述 -->
                <?php 
                    print ($_POST['kuji-name']);
                    print ($_POST['elements']);
                ?>
                
            </pre>
        </main>
    </body>    
</html>