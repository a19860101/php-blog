<?php
    require_once("connDB.php");
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $sql = "INSERT INTO `blog`(subject,content,datetime)VALUES('$subject','$content',NOW())";
    mysql_query($sql);
    header("Location:index.php");

?>