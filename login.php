<?php
    session_start();

    include('./functions.php');
    logIn($_POST['username'], $_POST['password']);

?>