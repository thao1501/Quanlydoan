<!-- Content Header (Page header) -->
<?php
include('../db/connect.php');
ob_start();
if (isset($_POST['addstudent'])) {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $class_id = $_POST['class_id'];
    $address = $_POST['address'];

    $sqlinsert = "INSERT INTO student(name, birthday, code, phone, email, address, class_id) VALUES('" . $name . "', '" . $birthday . "', '" . $code . "', '" . $phone . "', '" . $email . "', '" . $address . "', '" . $class_id . "')";
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=student');
        ob_end_flush();
    } else {
        echo 'Không thành công';
    }
} elseif (isset($_POST['editstudent'])) {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $class_id = $_POST['class_id'];
    $address = $_POST['address'];
    $id = $_GET['id'];
    $sqlupdate = "UPDATE student set name='$name', birthday = '$birthday', phone ='$phone', code='$code', email ='$email', class_id ='$class_id', address ='$address' where id ='$id'";
    $result = $mysqli->query($sqlupdate);
    if ($result) {
        header('Location:../index.php?action=student');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
} else {
    $id = $_GET['id'];
    $sqldelete = "delete from student where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=student');
    } else {
        echo 'Không thành công';
    }
}
?>