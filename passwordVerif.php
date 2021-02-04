<?php
session_start();
if(isset($_POST['user'], $_POST['pass'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        header('Location: ./index.php?error=empty');
    }elseif(base64_encode($_POST['user']) === "RGV2" && base64_encode($_POST['pass']) === "Q29kZXVy"){
        $_SESSION['user'] = base64_encode($_POST['user']);
        $_SESSION['pass'] = base64_encode($_POST['pass']);
        header('Location: ./fileProtege.php');
    }else{
        header('Location: index.php?error=incorrect');
    }
}else{
    header('Location: index.php?error=postNotFound');
}