<?php


include_once 'header.php';
?>



<h1 class="page-header">News</h1>
<?php
foreach ($news as $article) {
    echo '<p>'.$article->title.'</p>';
    if(!empty($article->author)){
        echo "Автор: ".$article->author->name;
    }else{
        echo "Автор: NULL";
    }
    echo ' <a href="index.php?action=one&id=' . $article->id.'">See more</a>';
    echo ' <a href="/news/one/' . $article->id.'">See more</a>';
}


include_once 'footer.php';