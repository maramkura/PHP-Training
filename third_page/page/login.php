<?php
$error_msg = '';
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $query = 'SELECT * FROM users WHERE username = "'.$username.'" AND password="'.md5($password).'"';
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    if (!is_null($row)) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header('Location: index.php?page=feed');
    } else {
        $error_msg = 'Incorrect data';
    }
}
?>
<?=$error_msg?>
<form action="" method="post">
    NAME <input type="text" name="username">
    PASSWORD <input type="password" name="password">
    <button type="submit">LOGIN</button>
</form>