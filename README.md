# IECstudio_frontpage

关于将表单内容填写到数据库功能中的说明
首先需要创建数据库，并且创建一个名为“message”的表
表中有七个字段


realName	char(15)  
College		char(15)  
mobilePhone	char(11)  
Snum		char(12) 主键  
Major		char(20)  
QQnum		char(10)  
Message		char(255)  
  
  
  
php代码中变量：  
$dbhost = "localhost"; 数据库地址  
$dbname = "info";   数据库名  
$dbusername = "info"; 用户名  
$dbpassword = "REGNAL"; 数据库密码  
