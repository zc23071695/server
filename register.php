<?php
    include('connet_db.php');
    header('Access-Control-Allow-Origin:*');
    // 获取传递的信息
    // formData $_POST
    // php获取json字符串解析方式
    $data = file_get_contents('php://input');
    // $data={ "username": "aaa", "password": "122223" };
    // $data = array("username" => "xiaolan", "password" => "123");
    $data = json_decode($data);
    $username = $data->username;
    $password = $data->password;
    // var_dump($data);
    $sql="INSERT into user_information (`username`,`password`) VALUE ('$username','$password')";
    // var_dump($sql);
    $db = new DB();
    $result = $db -> fetch($sql);
    // // var_dump($result);
    if($result) {
       
        $arr = array("code"=>200, "msg" => "注册成功");
    } else {
        // 没获取到
        $arr = array("code"=>0, "msg" => "由于网络原因，注册失败");
    };
    
    echo json_encode($arr);


?>