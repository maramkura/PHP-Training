<?php
session_start();
include 'incl/connect.php';
$content = '';
if (isset($_GET['page'])) {
    $filename = 'page/'.$_GET['page'].'.php';
    if (file_exists($filename)) {
        ob_start();
        include $filename;
        $content = ob_get_contents();
        ob_end_clean();
    } else {
        die('Not Found');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
<div class="page_container">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav nav-pills">
            <li><a href="index.php">HOME</span></a></li>
            <?php if (!empty($_SESSION['username'])): ?>
                <li><a>WELCOME <?=$_SESSION['username']?></a></li>
                <li><a href="index.php?page=logout">LOGOUT <?=$_SESSION['username']?></a></li>
            <?php else: ?>
            <li><a href="index.php?page=register">REGISTER</a></li>
            <li><a href="index.php?page=login">LOGIN</a></li>
            <?php endif;?>
        </ul>
    </div>
    
</div>
</div>
</nav>

<div class="row"><?php echo $content; ?></div>
</div>
</body>
</html>