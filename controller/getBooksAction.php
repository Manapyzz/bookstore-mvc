<?PHP

require(__DIR__.'/../model/book.php');

$books = getBooks();

require(__DIR__.'/../view/bookList.php');