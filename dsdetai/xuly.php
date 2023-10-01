<?php 
include('../db/connect.php');
ob_start();

if (isset($_POST['adddetai'])) {
    $tdt = $_POST['tendt'];
    $tgbd = $_POST['timebd'];
    $tgkt = $_POST['timekt'];
    $svth1 = $_POST['svth'];
    $gvhd1 = $_POST['gvhd'];
    $mt = $_POST['note'];
    $sqlinsert = "INSERT INTO dsdetai(tenDT, thoiGianDB, thoiGianKT,nguoiThuchien,giangVienhd,motaDT) 
        VALUES('" . $tdt . "', '" . $tgbd . "', '" . $tgkt . "', '" . $svth1 . "', '" . $gvhd1 . "', '" . $mt . "')";
        $result = mysqli_query($mysqli, $sqlinsert);
        if ($result) {
            header('Location:../index.php?action=dsdetai');
            ob_end_flush();
        } else {
            echo 'Không thành công';
        }
   
    //<!--INSERT INTO `dsdetai`(`id`, `maDT`, `tenDT`, `thoiGianDB`, `thoiGianKT`, `nguoiThuchien`, `giangVienhd`, `motaDT`) -->
}elseif (isset($_POST['cancel'])) {
    header('Location:../index.php?action=dsdetai');
    ob_end_flush();
}elseif(isset($_POST['editdetai'])){
    $tdt = $_POST['tendt'];
    $tgbd = $_POST['timebd'];
    $tgkt = $_POST['timekt'];
    $svth1 = $_POST['svth'];
    $gvhd1 = $_POST['gvhd'];
    $mt = $_POST['note'];
        $id = $_GET['id'];
        $sqlupdate = "UPDATE dsdetai set tenDT='$tdt', thoiGianDB = '$tgbd', thoiGianKT ='$tgkt', nguoiThuchien ='$svth1', giangVienhd ='$gvhd1', motaDT ='$mt'    where id ='$id'";
        $result = $mysqli->query($sqlupdate);
        if ($result) {
            header('Location:../index.php?action=dsdetai');
        } else {
            echo 'Không thành công';
        }
        $mysqli->close(); 
}elseif (isset($_POST['editcancel'])) {
    header('Location:../index.php?action=dsdetai');
    ob_end_flush();
}else{
    $id = $_GET['id'];
    $sqldelete = "delete from dsdetai where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=dsdetai');
    } else {
        echo 'Không thành công';
    }
}
?>