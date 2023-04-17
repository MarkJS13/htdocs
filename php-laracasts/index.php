<?php
    $books1 = [
                [
                    'title' => 'Do Androids Dream of Electric Sheep',
                    'author' => 'Andy Weir',
                    'purchaseURL' => 'http://example.com',
                    'year' => 2019
                ],

                [
                    'title' => 'Project Hail Mary',
                    'author' => 'Philip K. Dick',
                    'purchaseURL' => 'http://example.com',
                    'year' => 2019
                ],
                
                [
                    'title' => 'The Martians',
                    'author' => 'Andy Weir',
                    'purchaseURL' => 'http://example.com',
                    'year' => 2019
                ]
            ];

            $books2 = [
                [
                    'title' => 'Javascript Tutorial 2023',
                    'author' => 'Net Ninja',
                    'purchaseURL' => 'http://example.com',
                    'year' => 2011
                ],

                [
                    'title' => 'Javascript Tutorial 2022',
                    'author' => 'Max',
                    'purchaseURL' => 'http://example.com',
                    'year' => 2029
                ],
                
                [
                    'title' => 'The Martians21',
                    'author' => 'Jonas Schedtmann',
                    'purchaseURL' => 'http://example.com',
                    'year' => 2019
                ]
            ];


            function filterByAuthor($items, $books, $authorName) {
                
                $author = array_filter($books, function($book) use ($authorName, $items) {
                    return $book[$items] === $authorName;
                });

                $booklist = '';
                foreach($author as $bookdeets) {
                    $booklist .= "<li> <a href='$bookdeets[purchaseURL]'> {$bookdeets['title']} is written by {$bookdeets['author']}
                    </a> </li>";
                    
                };

                return $booklist;

            };

        include 'index.view.php';

    ?>  

