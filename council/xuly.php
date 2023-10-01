<?php
include('../db/connect.php');

if (isset($_POST['addcouncil'])) {
    $name = $_POST['name'];
    $academic_year = $_POST['academic_year'];
    $teacher_id1 = $_POST['teacher_id1'];
    $teacher_id2 = $_POST['teacher_id2'];
    $teacher_id3 = $_POST['teacher_id3'];
    $rooms=$_POST['rooms'];
    $star_date=$_POST['star_date'];
    $star_time=$_POST['star_time'];

    $sqlinsert = "INSERT INTO council( name, academic_year,teacher_id1, teachers_id2,teachers_id3,rooms,star_date,star_time) VALUES('" . $name . "', '" . $academic_year . "', '" . $teacher_id1 . "', '" . $teacher_id2 . "', '" . $teacher_id3 . "', '" . $rooms . "', '" . $star_date . "', '" . $star_time . "')";
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=council');
    } else {
        echo 'Không thành công. Lỗi: ' . mysqli_error($mysqli);
    }
    $mysqli->close();
}elseif (isset($_POST['cancel'])) {
    header('Location:../index.php?action=council');
    ob_end_flush();
} elseif (isset($_POST['editcouncil'])) {
    $name = $_POST['name'];
    $academic_year = $_POST['academic_year'];
    $teacher_id1 = $_POST['teacher_id1'];
    $teacher_id2 = $_POST['teacher_id2'];
    $teacher_id3 = $_POST['teacher_id3'];
    $rooms=$_POST['rooms'];
    $star_date=$_POST['star_date'];
    $star_time=$_POST['star_time'];
    $id = $_GET['id'];

 $sqlupdate = "UPDATE council set name='$name', academic_year = '$academic_year', teacher_id1 ='$teacher_id1', 
 teachers_id2='$teacher_id2', teachers_id3 ='$teacher_id3', rooms='$rooms', star_date='$star_date,star_time=$star_time' where id ='$id'";
    $result = $mysqli->query($sqlupdate);
    if ($result) {
        header('Location:../index.php?action=council');
    } else {
        echo 'Không thành công. Lỗi: ' . mysqli_error($mysqli);;
    }
    $mysqli->close();
}elseif (isset($_POST['editcancel'])) {
    header('Location:../index.php?action=council');
    ob_end_flush();
} else {
    $id = $_GET['id'];
    $sqldelete = "delete from council where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=council');
    } else {
        echo 'Không thành công';
    }
}
