<?php
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];

    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "tiger";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "insert into friend (name, tel, address) values
      ('$name', '$tel', '$address');";

    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "friend 테이블에 데이터 삽입 완료!";
    } else{
      echo "friend 테이블 데이터 삽입 실패".mysqli_error($conn);   
    }

    mysqli_close($conn);
    


?>