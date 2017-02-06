<?php
$nav = [
    ['id' => 'home', 'name' => 'Home'],
    ['id' => 'about', 'name' => 'About'],
    ['id' => 'blog', 'name' => 'Blog'],
    ['id' => 'contact', 'name' => 'Contact'],
];
$content = [
    'home'    => ['title' => 'Home Page', 'body' => 'This is home page content', 'type' => 'text'],
    'about'   => ['title' => 'About Us', 'body' => 'About Us', 'type' => 'text'],
    'blog'    => [
        'title' => 'Blog',
        'sia'  => [
            ['title' => 'blabl', 'body' => 'blabla'],
            ['title' => 'adskd', 'body' => 'asfsd'],
            ['title' => 'yahoo', 'body' => 'yahooo'],
            ['title' => 'foooo', 'body' => 'fuuuuu'],
            
        ],
        'type' => 'list'
    ],
    'contact' => ['title' => 'Contact', 'body' => 'Contact Us', 'type' => 'text'],
];


?>