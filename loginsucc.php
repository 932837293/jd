<!DOCTYPE html>
<html>
<head>
<title>µÇÂ¼³É¹¦</title>
<meta name="content-type"; charset=UTF-8">
</head>
<body>
    <div>
        <?php
            //¿ªÆôsession
            session_start();
            //ÉùÃ÷±äÁ¿
            $username= isset($_SESSION['user'])?$_SESSION['user']:"";
            //ÅÐ¶ÏsessionÊÇ·ñÎª¿Õ
            if(!empty($username)){
        ?>
            <h1>µÇÂ¼³É¹¦£¡</h1>
                »¶Ó­Äú£¡
        <?php
            echo $username;    
        ?>
            <br/>
            <a href="logout.php">ÍË³ö</a>
        <?php
            }else {
            //Î´µÇÂ¼£¬ÎÞÈ¨·ÃÎÊ
        ?>
            <h1>ÄãÎÞÈ¨·ÃÎÊ£¡£¡£¡</h1>
        <?php   
            }
        ?>  
    </div>
</body>
</html>