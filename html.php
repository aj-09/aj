<?php
/**
 * @Author: Your name
 * @Date:   2020-10-21 09:44:56
 * @Last Modified by:   Your name
 * @Last Modified time: 2020-10-21 09:44:56
 */
 <?
$fp = fopen("tmp.html", "r");
// 读取文件的全部内容
$str = fread($fp, filesize("tmp.html"));
// 替换文件内容
$str = str_replace("{title}", "今日新闻", $str);
$str = str_replace("{content}", "今日新闻要点", $str);
fclose($fp);
// 只写方式打开文件
$handle = fopen("news.html","w");
fwrite($handle, $str);
fclose($handle);
echo("生成成功");
?>
