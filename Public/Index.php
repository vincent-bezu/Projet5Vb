<?php

require dirname(__DIR__) . '/app/App.php';
App::load();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();

if($p === 'home'){

    require dirname(__DIR__) . '/Pages/MyBook/Home.php';
}

elseif($p === 'Conseil'){

    require dirname(__DIR__) . '/Pages/Posts/Conseil.php';
}
elseif($p === 'posts.catagory'){
    require dirname(__DIR__) . '/Pages/Posts/Category.php';
}
elseif($p === 'posts.view'){
    require dirname(__DIR__) . '/Pages/Posts/Article.php';
}
elseif($p === 'Mybook'){
    require dirname(__DIR__) . '/Pages/MyBook/Mybook.php';
}
elseif($p === 'login'){
    require dirname(__DIR__) . '/Pages/Users/Login.php';
}

$content = ob_get_clean();

require dirname(__DIR__) . '/Pages/Templates/Default.php';