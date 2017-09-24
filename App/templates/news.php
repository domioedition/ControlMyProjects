<?php


foreach ($news as $article) {

    echo "id: ".$article->id."<br>";
    echo "Title: ".$article->lead."<br>";
    echo "Content: ".$article->lead."<br>";
    echo "Author: ".$article->author->name."<br>";

    echo "<hr>";
}