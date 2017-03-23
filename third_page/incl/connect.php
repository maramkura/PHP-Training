<?php
$link = mysqli_connect('localhost', 'root', '', 'my_page');
if (!$link) {
    die('Could not connect: '.mysqli_error());
}
?>

