<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
    <style>
        body {
            color: #fff;
            background-color: #333;
            font-family: monospace;
            font-size: 16px;
        }

        h3 {
            background-color: #cca;
            color: #111;
            padding: 5px;
            margin-top: 5px;
        }

        a {
            color: #fec;
        }

        article {
            padding: 20px 0 20px 20px;
            background-color: #8b6;
            margin-bottom: 35px;
        }
    </style>

</head>
<body>
<a href="index.php?action=addForm">Add new task</a>
<?php

foreach ($news as $article) {
    echo '<article>';

    echo "id: " . $article->id . "<br>";
    echo '<a href=index.php?action=delete&id=' . $article->id . '>Delete</a>';
    echo '<h3>' . $article->title . '</h3>';
    echo "<p><b>Content:</b> " . $article->lead . "</p>";
    if (!empty($article->author)) {
        echo "Автор: " . $article->author->name;
    } else {
        echo "Автор: NULL";
    }
    echo '<a href=index.php?action=One&id=' . $article->id . '>  more..</a>';
    echo '</article>';
}
?>
</body>
</html>