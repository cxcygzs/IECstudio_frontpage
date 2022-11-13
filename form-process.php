<?php

$realName = $_POST["realName"];
$College = $_POST["College"];
$mobilePhone = $_POST["mobilePhone"];
$Snum = $_POST["Snum"];
$Major = $_POST["Major"];
$QQnum = $_POST["QQnum"];
$Message = $_POST["Message"];
$username = '---@qq.com';//发送者qq邮箱
$key = '---';//发送者qq邮箱对应key
$fromname = '测试';
$fromuser = '---@qq.com';//发送者qq邮箱
$title = '有新提交的信息';
$nr = '姓名:' . $realName . '<br></br>' . '学院：' . $College . '<br></br>' . '手机号：' . $mobilePhone . '<br></br>' . '学号：' . $Snum . '<br></br>' . '专业：' . $Major . '<br></br>' . 'QQ号：' . $QQnum . '<br></br>' . '信息：' . $Message . '<br></br>' ;
$reveuser = '----@qq.com';//接收者qq邮箱

if ($realName==""&&$Snum=="") {
	exit();
}


toMail($fromname,$username,$key,$fromuser,$reveuser,$title,$nr);



function toMail($fromname,$username,$key,$fromuser,$reveuser,$title,$nr){
    require_once("PHPMailer/class.phpmailer.php");
    require_once("PHPMailer/class.smtp.php");

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.qq.com';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->Charset = 'UTF-8';
    $mail->Fromname = $fromname;
    $mail->Username = $username;
    $mail->Password = $key;
    $mail->From = $fromuser;
    $mail->isHTML(true);
    $mail->addAddress($reveuser);
    $mail->Subject = $title;
    $mail->Body = $nr;
    $mail->send();
}




$dbhost = "localhost";
$dbname = "info";
$dbusername = "info";
$dbpassword = "REGNAL";
$conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
                       
if (mysqli_connect_errno()) {
    die("Connection error:". mysqli_connect_error());
}


$sql = "INSERT INTO message (realName,College,mobilePhone,Snum,Major,QQnum,Message)
        VALUES (?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if( ! mysqli_stmt_prepare($stmt,$sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"sssssss",
                       $realName,
                       $College,
                       $mobilePhone,
                       $Snum,
                       $Major,
                       $QQnum,
                       $Message);

mysqli_stmt_execute($stmt);
$url = "www.baidu.com";  //需要把这个url替换为提交表单的地址
echo "<meta http-equiv='refresh' content ='0;url=$url'>";
?>