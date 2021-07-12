<?php

$App = App::getInstance();

$currentcategorie = $App->getTable('Categorie')->find($_GET['id']);
$articles = $App->getTable('article')->lastByCategory($_GET['id']);
$categories = $App->getTable('Categorie')->all();
?>

<div class="categoryList">
    <ul>
        <?php foreach($categories as $categorie): ?>
            <li>
                <a href="<?= $categorie->url; ?>"><?= $categorie->title; ?></a>
            </li>
            <?php endforeach; ?>
    </ul>
</div>

<h2><?= $currentcategorie->title ?></h2>




<?php 
 foreach ($articles as $post):
?>

<div class="Article">
    <h3><?= $post->title; ?></h3>
    <p><?= $post->getExtrait(); ?></p>
</div>
  

<?php endforeach; ?>

