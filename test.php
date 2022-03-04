<?php
  // 用 empty 檢查表單是否為空
  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['content'])){
      echo '資料有缺，請再次填寫<br>';
      exit();   // 終止程序
  };
  // 接收 method 為 GET 的 From input
  echo "Hello!" . $_POST['name'] . " <br>";
  echo "Your email is " . $_POST['email'] . " <br>";
  echo "Your content is " . $_POST['content'] . " <br><br>";

  print_r($_POST);
?>