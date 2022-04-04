<?php
    session_destroy();
    setcookie('cookie_name', "", time() - 3600);
    header('Location:index.php');
?>