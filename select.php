<?php
$server_name = 'localhost';
$username = 'lynn';
$password = 'wowooo122';
$db_name = 'ES_web';

// mysqli 的四個參數分別為：伺服器名稱、帳號、密碼、資料庫名稱
$conn = new mysqli($server_name, $username, $password, $db_name);

if (!empty($conn->connect_error)) {
  die('資料庫連線錯誤:' . $conn->connect_error);    // die()：終止程序
}
else echo "成功! <br>";

$sql = "SELECT msg_name, msg_email, msg_content FROM Table_messages";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo " <br> Name: " . $row["msg_name"]. " <br> Email: " . $row["msg_email"]. " <br> Content: " . $row["msg_content"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>