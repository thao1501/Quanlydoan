<?php
include('../db/connect.php');

if (isset($_POST['addproject'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $student_id = $_POST['student_id'];
    $teacher_id = $_POST['teacher_id'];
    $code_project = $_POST['code_project'];
    $point = $_POST['point'];
    $linkdownload = $_POST['linkdownload'];
    $file_name= $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $path = '../uploads/';
    $sqlinsert = "INSERT INTO project(title, content, student_id, teacher_id, code_project,point,linkdownload,file) VALUES('" . $title . "', '" . $content . "', '" . $student_id . "', '" . $teacher_id . "', '" . $code_project . "', '" . $point . "', '" . $linkdownload . "','" . $file_name . "')";
    move_uploaded_file($file_tmp, $path . $file_name);
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=project');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
}elseif (isset($_POST['cancel'])) {
    header('Location:../index.php?action=project');
    ob_end_flush();
} elseif (isset($_POST['editproject'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $student_id = $_POST['student_id'];
    $teacher_id = $_POST['teacher_id'];
    $code_project = $_POST['code_project'];
    $point = $_POST['point'];
    $linkdownload = $_POST['linkdownload'];
    $file_name= $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    $path = '../uploads/';
    $id = $_GET['id'];
    if ($file_name == '') {
        $sqlupdate = "UPDATE project set title='$title', content = '$content', teacher_id ='$teacher_id', student_id='$student_id', code_project ='$code_project', point='$point', linkdownload='$linkdownload' where id ='$id'";
    } else {
        $sqlupdate = "UPDATE project set title='$title', content = '$content', teacher_id ='$teacher_id', student_id='$student_id', code_project ='$code_project', point='$point', linkdownload='$linkdownload', file ='$file_name' where id ='$id'";
    }
    $result = $mysqli->query($sqlupdate);
    if ($result) {
        move_uploaded_file($file_tmp, $path . $file_name);
        header('Location:../index.php?action=project');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
}elseif (isset($_POST['editcancel'])) {
    header('Location:../index.php?action=project');
    ob_end_flush();
} else {
    $id = $_GET['id'];
    $sqldelete = "delete from project where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=project');
    } else {
        echo 'Không thành công';
    }
}
