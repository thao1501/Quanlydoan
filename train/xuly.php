<!-- Content Header (Page header) -->
<?php 
include('../db/connect.php');
ob_start();
if (isset($_POST['addtrain'])) {
    $mahedt = $_POST['mahedt'];
    $tenhedt = $_POST['tenhedt'];
    $heso = $_POST['heso'];
    $soky = $_POST['soky'];
    $tgbatdau = $_POST['tgbatdau'];
    $tgketthuc = $_POST['tgketthuc'];
    $sqlinsert = "INSERT INTO train(tenhedt, mahedt, heso, soky, tgbatdau,tgketthuc) VALUES('" . $tenhedt . "', '" . $mahedt . "', '" . $heso . "', '" . $soky . "', '" . $tgbatdau . "', '" . $tgketthuc . "')";
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=train');
        ob_end_flush();
    } else {
        echo 'Không thành công';
    }
} elseif(isset($_POST['edittrain'])){
    $mahedt = $_POST['mahedt'];
    $tenhedt = $_POST['tenhedt'];
    $heso = $_POST['heso'];
    $soky = $_POST['soky'];
    $tgbatdau = $_POST['tgbatdau'];
    $tgketthuc = $_POST['tgketthuc'];
    $sqlupdate = "UPDATE train set tenhedt='$tenhedt', mahedt = '$mahedt', heso ='$heso', soky='$soky', tgbatdau ='$tgbatdau',tgketthuc ='$tgketthuv', where id ='$id'";
    $result = mysqli_query($mysqli, $sqlinsert);
        $result = $mysqli->query($sqlupdate);
        if ($result) {
            header('Location:../index.php?action=train');
        } else {
            echo 'Không thành công';
        }
        $mysqli->close(); 
}else{
    $id = $_GET['id'];
    $sqldelete = "delete from train where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=train');
    } else {
        echo 'Không thành công';
    }
}
?>