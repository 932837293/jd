<?php
    //��������
    $username = isset($_POST['username'])?$_POST['username']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $remember = isset($_POST['remember'])?$_POST['remember']:"";

    //�ж��û����������Ƿ�Ϊ��
    if(!empty($username)&&!empty($password)) {
        //��������
        $conn = mysqli_connect('localhost','root','123','php');
        //׼��SQL���
        $sql_select = "SELECT username,password FROM User WHERE username = '$username' AND password = '$password'";
        //ִ��SQL���
        $ret = mysqli_query($conn,$sql_select);

        $row = mysqli_fetch_array($ret);

        //�ж��û����������Ƿ���ȷ
        if($username==$row['username']&&$password==$row['password']) {
            //ѡ�С���ס�ҡ�
            if($remember=="on") {
                //����cookie
                setcookie("wang", $username, time()+7*24*3600);
            }
            //����session
            session_start();
            //����session
            $_SESSION['user']=$username;
            //д����־
            $ip = $_SERVER['REMOTE_ADDR'];
            $date = date('Y-m-d H:m:s');

            $info = sprintf("��ǰ�����û���%s,IP��ַ��%s,ʱ�䣺%s \n",$username, $ip, $date);
            $sql_logs = "INSERT INTO Logs(username,ip,date) VALUES('$username','$ip','$date')";

            //��־д���ļ�����ʵ�ִ˹��ܣ���Ҫ�����ļ�Ŀ¼logs
            $f = fopen('./logs/'.date('Ymd').'.log','a+');

            fwrite($f,$info);
            fclose($f);

            //��ת��loginsucc.phpҳ��
            header("Location:loginsucc.php");
            //�ر����ݿ�
            mysqli_close($conn);
        }else {
            //�û�����������󣬸�ֵerrΪ1
            header("Location:login.php?err=1");
        }
    }else {
        //�û���������Ϊ�գ���ֵerrΪ2
        header("Location:login.php?err=2");
    }

?>