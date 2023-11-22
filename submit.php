<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "username"; // Thay username bằng tên người dùng của bạn
$password = "password"; // Thay password bằng mật khẩu của bạn
$dbname = "tengiaodien"; // Thay tengiaodien bằng tên cơ sở dữ liệu của bạn

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$title = $_POST['title'];
$description = $_POST['description'];

// Chuẩn bị câu truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO bai_giang (title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "Dữ liệu đã được lưu thành công!";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
