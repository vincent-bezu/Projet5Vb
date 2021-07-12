<div class="categoryList">
    <ul>
        <?php foreach(App::getInstance()->getTable('Categorie')->all() as $categorie): ?>
            <li>
                <a href="<?= $categorie->url; ?>"><?= $categorie->title; ?></a>
            </li>
            <?php endforeach; ?>
    </ul>
</div>    

<h2>Mes derniers articles</h2>



<?php 
 foreach (App::getInstance()->getTable('Article')->last() as $post):
?>

<div class="Article">
    <h3><?= $post->title; ?></h3>
    <p><?= $post->getExtrait(); ?></p>
</div>
  

<?php endforeach; ?>


