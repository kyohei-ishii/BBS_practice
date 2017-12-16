<!DOCTYPE html>
<html>
    <head>
        <title>mission1-4</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    
    <body> 
        <form method="post">
            名前: <input type="text" name="name" />
            <input type="submit" />
        </form>

        <p>こんにちは、<?php echo htmlspecialchars($_POST['name']); ?>さん。</p>
    </body>

</html>  

