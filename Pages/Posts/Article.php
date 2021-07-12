<?php

$App = App::getInstance();
$post = $App->getTable('Article')->find($_GET['id']);


?>
<h2>Article</h2>

<div class="SingleArticle">
    <h1><?= $post->title; ?></h1>
    <p><?= $post->content ?></p>
</div>



