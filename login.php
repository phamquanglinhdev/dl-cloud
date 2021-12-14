<?php
session_start();
$account = [
    [
        'username'=>'linhcuenini',
        'password'=>'Linhz123@',
    ],
];
if(isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
}
$isAccount = false;
$isLog = false;
foreach ($account as $user){
    if($user["username"]==$username){
        $isAccount = true;
        if($user["password"]==$password){
            $_SESSION["stratus"]=true;
            $isLog = true;
            echo "<script>window.location('elfinder.src.html')</script>";
        }
    }
}
if(!$isLog || $isAccount){
    echo "<script>window.history.back()</script>";
}
?>
