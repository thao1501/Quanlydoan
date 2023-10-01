<!-- Content Header (Page header) -->
<?php 
include('../db/connect.php');
ob_start();

if (isset($_POST['addcourse'])) {
    $name = $_POST['name'];
    $time = $_POST['time'];
    $note = $_POST['note'];
    $sqlinsert = "INSERT INTO course(name, time, note) VALUES('" . $name . "', '" . $time . "', '" . $note . "')";
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=course');
        ob_end_flush();
    } else {
        echo 'Không thành công';
    }
}elseif (isset($_POST['cancel'])) {
    header('Location:../index.php?action=course');
    ob_end_flush();
}elseif(isset($_POST['editcourse'])){
    $name = $_POST['name'];
    $time = $_POST['time'];
    $note = $_POST['note'];
        $id = $_GET['id'];
        $sqlupdate = "UPDATE course set name='$name', time = '$time', note ='$note' where id ='$id'";
        $result = $mysqli->query($sqlupdate);
        if ($result) {
            header('Location:../index.php?action=course');
        } else {
            echo 'Không thành công';
        }
        $mysqli->close(); 
}elseif (isset($_POST['editcancel'])) {
    header('Location:../index.php?action=course');
    ob_end_flush();
}else{
    $id = $_GET['id'];
    $sqldelete = "delete from course where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=course');
    } else {
        echo 'Không thành công';
    }
}
?>