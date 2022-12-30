<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
</head>
<body>
<form action="/" method="post" style="background-color: bisque">
    <input type="text" name="username"><br>
    <input type="email" name="email">
    <br>
    <input type="submit" value="Click">
</form>

<?php
    if (isset($_POST['username'])){
        ?> <h3>
                <?php echo $_POST['email'] ?>
           </h3>
    <?php } ?>
</body>
</html>
