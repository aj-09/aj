<?php
/**
 * @Author: Your name
 * @Date:   2020-10-19 23:58:42
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-10-21 09:58:20
 */
 
// 用 $_POST 来获取提交过来的表单数据,$_POST 是PHP内置的变量，数组格式
// print_r($_POST);
// print('<hr>');
// 处理登录
error_reporting(0);//去掉wing提示语



$username = $_POST['username'];
$passwd = $_POST['password'];

// if ($username=='admin' && $passwd == '123456'){
// 	session_start(); // 启用回话
// 	// print('登录成功');
// 	$_SESSION["username"]=$username;

// 	header("Location: profile.php"); // 跳转

// }else{

// 	print('账号或密码不对<br>');
// 	echo "<a href='login_form.html'>登录</a>";
	
// }


$db_file =__DIR__.'../../sql/a.db'; // demo.sqlite
$db = new SQLite3($db_file);

// $sql = "SELECT * FROM users WHERE username='". $username ."' AND password = '". $passwd ."'";
$sql = "SELECT * FROM  a  WHERE username ='{$username}' AND password = '{$passwd}'";
$ret = $db->query($sql);	

$row = $ret->fetchArray(SQLITE3_ASSOC);
if(empty($row)){
  
echo '<script language="JavaScript">;alert("账号或密码不对");location.href="../index.html";</script>;';
	
}else{
	$fp = fopen("../index.html", "r");
// 读取文件的全部内容
$str = fread($fp, filesize("../index.html"));
// 替换文件内容
$str = str_replace("{title}", "今日新闻", $str);
$str = str_replace("{content}", "今日新闻要点", $str);
fclose($fp);
// 只写方式打开文件
$handle = fopen("news.html","w");
fwrite($handle, $str);
fclose($handle);
echo("生成成功");

	// session_start(); // 启用回话
	// $_SESSION["username"]=$username;
	header("Location:news.html"); // 跳转
}
