<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One news</title>
</head>
<body>
<h1>Onew news</h1>
<a href="../">Main</a>
<?php

var_dump($article);

if(isset($article)) {
    echo '<p>' . $article->title;
    echo '<p>' . $article->author->name;
}

?>
</body>
</html>