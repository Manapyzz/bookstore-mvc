<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/books') {
    require(__DIR__.'/../controller/getBooksAction.php');
} else if ($url === '/add-book') {
    require(__DIR__.'/../controller/addBookAction.php');
} else {
    require(__DIR__.'/../controller/notFoundAction.php');
}

switch ($url) {
    case '/books':
        require(__DIR__.'/../controller/getBooksAction.php');
        break;
    case '/add-book':
        require(__DIR__.'/../controller/addBookAction.php');
        break;
//    case '/comments':
//        require(__DIR__.'/controller/getCommentsAction.php');
    default:
        require(__DIR__.'/../controller/notFoundAction.php');
        break;
}
