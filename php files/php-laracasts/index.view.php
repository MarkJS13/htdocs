<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <ul>
        <?php print_r(filterByAuthor('author', $books1, 'Andy Weir')) ?>
    </ul>

    <ul>
        <?php print_r(filterByAuthor('year', $books2, 2011)) ?>
    </ul>
            

</body>
</html>