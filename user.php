<?php
header("Content-type:text/html;charset=utf8");
$username=$_GET["username"];
$password=$_GET["password"];
$tel=$_GET["tel"];
$email=$_GET["email"];
$age=$_GET["age"];
$sex=$_GET["sex"];
// echo $username,$sex;
$conn=new Mysqli('localhost','root','','user',3306);
$conn->query("SET CHARACTER SET 'utf8'");
$conn->query("SET NAMES 'utf8'");
$sql="INSERT into user_information (`username`,`age`,`PASSWORD`,`email`,`sex`,tel) VALUE ('$username',$age,'$password','$email','$sex','$tel')";
echo $username;
$result=$conn->query($sql);
if($result){
    echo "<script>alert('注册成功,请登陆');location.href='login.html';</script>";
}else{
    echo "<script>alert('注册失败')</script>";
};










?>