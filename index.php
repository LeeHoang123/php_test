<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn lấy dữ liệu từ bảng users
$sql = "SELECT username, password, email, phone FROM users";
$result = $conn->query($sql);

// Hiển thị dữ liệu trong bảng
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Username</th><th>Password</th><th>Email</th><th>Phone</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Không tìm thấy dữ liệu";
}

// Đóng kết nối
$conn->close();
?>
