<?php

use Core\Auth\DBAuth;

require dirname(__DIR__) . '/app/App.php';
App::load();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

//AUTH //
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if(!$auth->logged()){
    $app->forbidden();
}

ob_start();

if($p === 'home'){

    require dirname(__DIR__) . '/Pages/Admin/Posts/index.php';
}

elseif($p === 'Conseil'){

    require dirname(__DIR__) . '/Pages/Admin/Posts/Conseil.php';
}
elseif($p === 'posts.catagory'){
    require dirname(__DIR__) . '/Pages/Admin/Posts/Category.php';
}
elseif($p === 'posts.view'){
    require dirname(__DIR__) . '/Pages/Admin/Posts/Article.php';
}
elseif($p === 'Mybook'){
    require dirname(__DIR__) . '/Pages/Admin/MyBook/Mybook.php';
}

$content = ob_get_clean();

require dirname(__DIR__) . '/Pages/Templates/Default.php';