<?php
    require_once("connDB.php");
    $sql = "SELECT * FROM `blog`ORDER BY id DESC";
    $result = mysql_query($sql);
    $total = mysql_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
   <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
</head>

<body>
    <div class="container">
        <h1>My Blog</h1>
        <div class="box-form">
           <form action="javascript:;">
                <input type="text" name="subject" id="subject" placeholder="我要留言">
                <textarea name="content" id="content" placeholder="內容"></textarea>
                <input type="submit" id="submit" value="送出">
            </form>
        </div>
        <?php while($row=mysql_fetch_assoc($result)){ ?>
        <div class="box">
            <h2><?php echo $row["subject"]; ?></h2>
            <p>
                <?php echo $row["content"]; ?>
            </p>
            <div class="datetime"><?php echo $row["datetime"]; ?></div>
        </div>
        <?php } ?>
    </div>
    <script>
        $(function () {
            $("#submit").click(function () {
                $.ajax({
                    url: "add.php",
                    type: "post",
                    data: {
                        subject: $("#subject").val(),
                        content: $("#content").val()
                    },
                    success:function(e){
                        location.reload();
      
                    },
                    beforeSend:function(e){
                        
                    },
                    error:function(e){
                        
                    }
                })
            });
        })
    </script>
</body>

</html>