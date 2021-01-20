<?php

require(__DIR__.'/../controller/bookController.php');

$url = $_SERVER['REQUEST_URI'];

//if ($url === '/books') {
//    require(__DIR__.'/../controller/getBooksAction.php');
//} else if ($url === '/add-book') {
//    require(__DIR__.'/../controller/addBookAction.php');
//} else {
//    require(__DIR__.'/../controller/notFoundAction.php');
//}
$urlAndParams = explode('/', $url);
array_shift($urlAndParams);

switch ($urlAndParams[0]) {
    case 'books':
        getBooksAction();
        break;
    case 'create-book':
        createBookAction();
        break;
    case 'book':
        if (isset($urlAndParams[1])) {
            getBookAction($urlAndParams[1]);
        }
        break;
//    case '/comments':
//        require(__DIR__.'/controller/getCommentsAction.php');
    default:
        require(__DIR__.'/../controller/notFoundAction.php');
        break;
}
