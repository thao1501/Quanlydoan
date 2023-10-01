<?php
include('../db/connect.php');

if (isset($_POST['addteacher'])) {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $faculty_id = $_POST['faculty_id'];
    $file_name = $_FILES['avatar']['name'];
    $file_tmp = $_FILES['avatar']['tmp_name'];
    $path = '../uploads/';
    $sqlinsert = "INSERT INTO teachers(name, birthday, address, phone, email,faculty_id,avatar) VALUES('" . $name . "', '" . $birthday . "', '" . $address . "', '" . $phone . "', '" . $email . "', '" . $faculty_id . "','" . $file_name . "')";
    move_uploaded_file($file_tmp, $path . $file_name);
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=giaovien');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
} elseif (isset($_POST['editteacher'])) {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $file_name = $_FILES['avatar']['name'];
    $file_tmp = $_FILES['avatar']['tmp_name'];
    $faculty_id = $_POST['faculty_id'];
    $path = '../uploads/';
    $id = $_GET['id'];
    if ($file_name == '') {
        $sqlupdate = "UPDATE teachers set name='$name', birthday = '$birthday', phone ='$phone', address='$address', email ='$email', faculty_id='$faculty_id' where id ='$id'";
    } else {
        $sqlupdate = "UPDATE teachers set name='$name', birthday = '$birthday', phone ='$phone', address='$address', email ='$email', faculty_id='$faculty_id', avatar ='$file_name' where id ='$id'";
    }
    $result = $mysqli->query($sqlupdate);
    if ($result) {
        move_uploaded_file($file_tmp, $path . $file_name);
        header('Location:../index.php?action=giaovien');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
} 
else {
    $id = $_GET['id'];
    $sqldelete = "delete from teachers where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=giaovien');
    } else {
        echo 'Không thành công';
    }

}
