<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$server_name = 'localhost';
$username = 'lynn';
$password = 'wowooo122';
$db_name = 'ES_web';
// mysqli 的四個參數分別為：伺服器名稱、帳號、密碼、資料庫名稱
$conn = new mysqli($server_name, $username, $password, $db_name);

if (!empty($conn->connect_error)) {
  die('資料庫連線錯誤:' . $conn->connect_error);    // die()：終止程序
}
//else echo "成功! <br>";

$name = $_POST['name']; 
$email = $_POST['email']; 
$content = $_POST['content']; 

// 用 empty 檢查表單是否為空
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['content'])){
  //echo "<script>alert('資料有缺')</script>";
  //echo '資料有缺，請再次填寫<br>';
  echo '<script type="text/javascript">alert("資料有缺，請重新輸入");location.href="index.html#contactme"</script>';
  exit();   // 終止程序
};

//$sql = "INSERT INTO Table_messages (msg_name, msg_email, msg_content)
//VALUES ($name , $email , $content)";
$sql = sprintf(  
  // 插入新欄位，%s 代表字串，值是第二個參數
 "INSERT INTO Table_messages(msg_name,msg_email,msg_content) VALUES('%s','%s','%s')",
 $name,$email,$content
);
 
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("~已成功發送~");location.href="/"</script>';
    //header("Location: index.html");
    //echo "成功發送，等待作者回信 :) ";
    //echo $_POST['name'],$_POST['email'],$_POST['content'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>