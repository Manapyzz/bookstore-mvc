<?php

require(__DIR__.'/../model/book.php');

function createBookAction() {
    createBook('book title', 150);

    header('Location: books');die;
}

function getBooksAction() {
    $books = getBooks();

    require(__DIR__.'/../view/bookList.php');
}

function getBookAction($id) {
    $book = getBook($id);

    require(__DIR__.'/../view/bookPage.php');
}