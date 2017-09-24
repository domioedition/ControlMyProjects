<?php

require __DIR__.'/autoload.php';
$authors = \App\Models\News::find_all();
var_dump($authors[0]->author->name);