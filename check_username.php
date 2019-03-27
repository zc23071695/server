<?php
    include('connet_db.php');
    header('Access-Control-Allow-Origin:*');
    // 获取传递的信息
    // formData $_POST
    // php获取json字符串解析方式
    $data = file_get_contents('php://input');

    $data = json_decode($data);
    $username = $data->username;
   
    // var_dump($data);
    $sql="select * from user_information where username='$username'";
    // var_dump($sql);
    $db = new DB();
    $result = $db -> fetch($sql);
    // // var_dump($result);
    if($result) {
       
        $arr = array("code"=>200, "msg" => "用户名已存在");
    } else {
        // 没获取到
        $arr = array("code"=>0, "msg" => "用户名可用");
    };
    
    echo json_encode($arr);


?>