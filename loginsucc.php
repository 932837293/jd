<!DOCTYPE html>
<html>
<head>
<title>��¼�ɹ�</title>
<meta name="content-type"; charset=UTF-8">
</head>
<body>
    <div>
        <?php
            //����session
            session_start();
            //��������
            $username= isset($_SESSION['user'])?$_SESSION['user']:"";
            //�ж�session�Ƿ�Ϊ��
            if(!empty($username)){
        ?>
            <h1>��¼�ɹ���</h1>
                ��ӭ����
        <?php
            echo $username;    
        ?>
            <br/>
            <a href="logout.php">�˳�</a>
        <?php
            }else {
            //δ��¼����Ȩ����
        ?>
            <h1>����Ȩ���ʣ�����</h1>
        <?php   
            }
        ?>  
    </div>
</body>
</html>