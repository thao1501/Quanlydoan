<?php
include('../db/connect.php');

if (isset($_POST['addteacher'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $file_name = $_FILES['avatar']['name'];
    $file_tmp = $_FILES['avatar']['tmp_name'];
    $path = '../uploads/';
    $sqlinsert = "INSERT INTO login(fullname, username, password,avatar) VALUES('" . $fullname . "', '" . $username . "', '" . $password . "','" . $file_name . "')";
    move_uploaded_file($file_tmp, $path . $file_name);
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=user');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
} elseif (isset($_POST['editteacher'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $file_name = $_FILES['avatar']['name'];
    $file_tmp = $_FILES['avatar']['tmp_name'];
    $path = '../uploads/';
    $id = $_GET['id'];
    if ($file_name == '') {
        $sqlupdate = "UPDATE login set fullname='$fullname', username = '$username', password = '$password' where id ='$id'";
    } else {
        $sqlupdate = "UPDATE login set fullname='$fullname', username = '$username', password = '$password', avatar ='$file_name' where id ='$id'";
    }
    $result = $mysqli->query($sqlupdate);
    if ($result) {
        move_uploaded_file($file_tmp, $path . $file_fullname);
        header('Location:../index.php?action=user');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
} else {
    $id = $_GET['id'];
    $sqldelete = "delete from login where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=user');
    } else {
        echo 'Không thành công';
    }
}
