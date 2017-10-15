<?php


include_once 'header.php';

foreach ($news as $article) {
    echo '<p>'.$article->title.'</p>';
    if(!empty($article->author)){
        echo "Автор: ".$article->author->name;
    }else{
        echo "Автор: NULL";
    }
    echo ' <a href="index.php?action=one&id=' . $article->id.'">See more</a>';
    echo ' <a href="/news/' . $article->id.'">See more</a>';
}


include_once 'footer.php';