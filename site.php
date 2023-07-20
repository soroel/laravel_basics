<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="site.php" method="post">
           Apples: <input type="checkbox" name="fruits[]" value="apple">
           <br>
           Mangoes: <input type="checkbox" name="fruits[]" value="mango"> 
           <br>
           pear: <input type="checkbox" name="fruits[]" value="pear">
           <br>
           <input type="submit">
        </form>
         <?php
           $fruits = $_POST["fruits"];
           echo $fruits[0];


        ?>
        
        <script src="" async defer></script>
    </body>
</html>