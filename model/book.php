<?php

function getBooks() {

    require(__DIR__.'/../config/dbconnection.php');

    $query = $database->prepare('SELECT * FROM book WHERE 1');
    $query->execute();

    $books = $query->fetchAll();

    return $books;
}

function getBook($id) {
    require(__DIR__.'/../config/dbconnection.php');

    $query = $database->prepare('SELECT * FROM book WHERE id = :id');
    $query->execute(
        [
            'id' => $id
        ]
    );

    $book = $query->fetch();

    return $book;
}

function createBook($title, $price) {
    require(__DIR__.'/../config/dbconnection.php');

    $query = $database->prepare('INSERT INTO `book`(`title`, `price`) VALUES (:title,:price)');
    $query->execute([
        'title' => $title,
        'price' => $price
    ]);

    return $book;
}