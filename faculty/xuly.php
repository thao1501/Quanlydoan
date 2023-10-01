<!-- Content Header (Page header) -->
<?php 
include('../db/connect.php');
ob_start();
if (isset($_POST['addfaculty'])) {
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];
    $sqlinsert = "INSERT INTO faculty(name, birthday, code, phone, note) VALUES('" . $name . "', '" . $birthday . "', '" . $code . "', '" . $phone . "', '" . $note . "')";
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=faculty');
        ob_end_flush();
    } else {
        echo 'Không thành công';
    }
} elseif(isset($_POST['editfaculty'])){
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];
        $id = $_GET['id'];
        $sqlupdate = "UPDATE faculty set name='$name', birthday = '$birthday', phone ='$phone', code='$code', note ='$note' where id ='$id'";
        $result = $mysqli->query($sqlupdate);
        if ($result) {
            header('Location:../index.php?action=faculty');
        } else {
            echo 'Không thành công';
        }
        $mysqli->close(); 
}else{
    $id = $_GET['id'];
    $sqldelete = "delete from faculty where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=faculty');
    } else {
        echo 'Không thành công';
    }
}
?>