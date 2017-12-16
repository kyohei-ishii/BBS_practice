<!DOCTYPE html>
<html>
    <head>
        <title>mission1-5</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    
    <body> 
        <form method="post">
            名前: <input type="text" name="name" />
            <input type="submit" value="保存"/>
        </form>
        
        <?php
            if ($_POST{"name"}) {//名前が記入されていればファイル生成開始
                $filename = 'kadai5.txt';

                $fp = fopen($filename, 'w');
                
                $content = htmlspecialchars($_POST['name']);

                fwrite($fp, $content."\n");

                fclose($fp);
                
                echo $filename. "を生成し、書き込みを行いました。";
            } else {
                echo "フォームに入力してください。";
            }
        ?>
    </body>

</html>  

