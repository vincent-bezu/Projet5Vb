<?php $title = 'Mon Livre'; ?>


<?php 
 foreach (App::getInstance()->getTable('book')->Book() as $post);
?>

<div id="BookResume"><h1>Résumé de mon livre</h1></div>
<div class="card" style="width: 45em;">
  <img src="../Images/write.jpg" class="card-img-top" alt="image de présentation">
  <div class="card-body">
    <h5 class="card-title"><?= $post->title; ?></h5>
    <p class="card-text"><?= $post->resume; ?></p>
    <a href="" class="btn btn-primary">Télécharger le livre</a>
  </div>
</div>

<h2>Commentaires</h2>


        
            <div class="commentBloc"><p><strong></strong> le </p>
            <p></p>
            <p>">Signaler le commentaire</a></p>
        
        

<form action="" method="post">
  <div class="form-group">
    <label for="author">Auteur</label>
    <input type="text" class="form-control" id="Author" name="Author">
    <small id="AuthorHelp" class="form-text text-muted">Votre nom sera visible par l'ensemble des utilisateurs.</small>
  </div>
  <div class="form-group">
    <label for="Comment">Commentaire</label>
    <textarea class="form-control" id="Comment" name="Comment"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>