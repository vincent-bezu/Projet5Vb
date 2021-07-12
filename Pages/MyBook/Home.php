<?php $title = 'Accueil'; ?>


  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Images/write.jpg" class="d-block w-100" alt="Explication d'utilisation du site">
        <div class="carousel-caption d-none d-md-block">
          <h5>Comment télécharger mon livre?</h5>
          <p>Voici le étapes qui vous permettrons de télécharger mon livre.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Images/write.jpg" class="d-block w-100" alt="Explication d'utilisation du site">
        <div class="carousel-caption d-none d-md-block">
          <h5>Connectez vous au site</h5>
          <p>Dans la barre de navigation accédez au bouton "se connecter" ou "enregistrez vous" si vous ne posséder pas de compte.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Images/write.jpg" class="d-block w-100" alt="Explication d'utilisation du site">
        <div class="carousel-caption d-none d-md-block">
          <h5>Vous êtes connecté</h5>
          <p>Une fois connecté, accédé  la partie "mon livre" et cliquez sur "télécharger le Livre"</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php 
 foreach (App::getInstance()->getTable('book')->Book() as $Bookcontent);
?>
 
<div id="BookResume"><h1>Résumé de mon livre</h1></div>
<div class="card" style="width: 45em;">
  <img src="../Images/write.jpg" class="card-img-top" alt="image de présentation">
  <div class="card-body">
    <h5 class="card-title"><?= $Bookcontent->title; ?></h5>
    <p class="card-text"><?= $Bookcontent->getResume(); ?></p>
    <a href="Index.php?p=Mybook" class="btn btn-primary">Lire la suite</a>
  </div>

  

 
	
</div>

<div class="connexionButton"><button type="button" class="btn btn-link"><a href="">Connectez-vous</a></button></div>



