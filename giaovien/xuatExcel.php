<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qldoantn";
$mysqli = new mysqli($servername, $username, $password, $dbname);
$selectedIdsJSON = $_POST['selectedIds'];
$selectedIds = json_decode($selectedIdsJSON);
$idList = implode(",", $selectedIds);

if ($mysqli->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $mysqli->connect_error);
}
$sql = "SELECT * FROM teachers WHERE id IN ($idList)";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $header = ["Tên giáo viên", "Ngày sinh", "Số điện thoại", "Địa chỉ", "Email"];
    $sheet->fromArray([$header], null, 'A1');

    $rowNumber = 2;
    while ($row = $result->fetch_assoc()) {
        $data = [$row["name"], $row["birthday"], $row["phone"], $row['address'], $row['email']];
        $sheet->fromArray([$data], null, 'A' . $rowNumber);
        $rowNumber++;
    }

    $excelFileName = "giao_vien.xlsx";
    $savePath = "../uploads/" . $excelFileName; // Cập nhật đường dẫn thư mục uploads
    $writer = new Xlsx($spreadsheet);
    $writer->save($savePath);

    // Đóng kết nối đến cơ sở dữ liệu
    $mysqli->close();

    // Trả về đường dẫn tệp Excel sau khi đã lưu
    echo $savePath;
} else {
    echo "Không có dữ liệu để xuất.";
}
?>