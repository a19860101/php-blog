<?php
    header("Content-Type:text/html;charset=utf-8");
    @mysql_connect("localhost","root","12345678")or die("資料庫連線錯誤");
    mysql_select_db("test")or die("資料庫錯誤");
    mysql_query("SET NAMES utf8");
?>