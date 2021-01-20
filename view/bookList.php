<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookStore</title>
</head>
<body>
<h1>Welcome on Bookstore</h1>
<ul>
    <?php foreach ($books as $book): ?>
        <li>
            title: <?php echo $book['title']; ?><br>
            price: <?php echo $book['price'] ?> €
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>