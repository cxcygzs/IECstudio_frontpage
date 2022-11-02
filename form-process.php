<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/contest.apply-4.9.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui-1.10.4.custom.min.css">
    <link rel="stylesheet" href="assets/css/sc.address.min.css">
    <link rel="stylesheet" href="assets/css/sc.address.min.css">
    <link rel="stylesheet" href="assets/css/top-6.21.1.css">
    <link rel="stylesheet" href="assets/css/searchhistory.css">
</head>

<body>
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

?>
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="index.html"><i class="fa fa-group mr-1"
                            aria-hidden="true"></i>创新创业工作室</a>
                </h1>

                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">主页 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">关于</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="contact.html">联系我们</a>
                        </li>

                    </ul>
                </div>



            </nav>
        </div>
    </header>

    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">联系我们</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">主页</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> 联系我们</li>
                </ul>
            </div>
        </section>
    </div>

    <div class="contact-form py-5">
        <div class="container py-lg-5 py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">联系我们</h3>
                        <p class="lead">

                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto" style="max-width:1100px">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">工作室地点</h5>
                                    <p>东风校区教二楼202</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">负责人电话</h5>
                                    <a href="tel:+12 23456790">+86 13598451061</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">电子邮箱</h5>
                                    <a href="mailto:info@example.com"> 1073382274@qq.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form pt-5 mt-2">
                    <div class="common-box sk-contest-top-box clearfix">
            <div class="fl sk-contest-top-title">
                提交信息
            </div>
            <div class="fl sk-contest-process-map-box three-steps">
                <div class="sk-contest-process-map-line three-steps step-1">
                    <div class="item info">
                        <span class="item-text ">
                            填写个人信息
                        </span>
                    </div>
                    <div class="item finish">
                        <span class="item-text">
                            提交
                        </span>
                    </div>
                </div>
            </div>
        </div>
                    <form action="form-process.php" method="post" class="cont-form p-sm-5">
                    <!-- <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="cont-form p-sm-5">   -->
                        <div class="row">
                            <div class="col-md-6">
                                <label for="realName"></label>
                                <input type="text" name="realName" id="realName" placeholder="真实姓名"
                                    class="contact-input" required/>

                                <label for="College"></label>
                                <input type="text" name="College" id="College" placeholder="所在院系"
                                    class="contact-input" required/>

                                <label for="mobilePhone"></label>
                                <input type="text" name="mobilePhone" id="mobilePhone" placeholder="电话号码"
                                    class="contact-input" required/>
                            </div>
                            <div class="col-md-6">
                                <label for="Campus"></label>
                                <input type="text" name="Snum" id="Snum" placeholder="学号"
                                    class="contact-input" required/>

                                <label for="Major"></label>
                                <input type="text" name="Major" id="Major" placeholder="所学专业"
                                    class="contact-input" required/>

                                <label for="qnum"></label>
                                <input type="text" name="QQnum" id="QQnum" placeholder="QQ号码"
                                    class="contact-input" required/>
                            </div>

                        </div>
                        <textarea class="contact-textarea" name="Message" id="Message"
                            placeholder="在这里输入你的留言" ></textarea>
                        <div class="text-right">
                            <button class="btn btn-style-white btn-style-primary">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>

        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }


        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {

            autoType(".type-js", 200);
        });
    </script>

    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>

    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>