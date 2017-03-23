<?php
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $query = 'INSERT INTO users (username, password) VALUES ("'.$username.'", "'.md5($password).'")';
    mysqli_query($link, $query);
    header('Location: login.php');
}
?>
<form action="" method="post">
    NAME <input type="text" name="username">
    PASSWORD <input type="password" name="password">
    <button type="submit">REGISTER</button>
</form>