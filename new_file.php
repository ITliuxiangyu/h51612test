<?php
	header("Access-Control-Allow-Origin: *");
  $myUrl = $_GET["myUrl"];
  
  // 我该了代码
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $myUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $res = curl_exec($ch);
  echo $res;
  curl_close($ch);


  // 我优化了好多daima 



  // 我有开始改代码了
?>
