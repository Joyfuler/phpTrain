<?php
    session_start(); // 세션 개시.
    if (isset($_SESSION["userid"])){ // 로그인한 상태라면
        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];        
        $userlevel = $_SESSION["userlevel"];
    }
    else {
        $userid = ""; //로그인하지 않았다면 userid패러미터에는 아무것도 넣지 않는다.
        $userlevel = "";
        $username = "";
    }
        
?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP+MySQL 입문</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <h3 class="logo">
        <a href="../main/index.php">PHP+MySQL입문</a>
    </h3>
    <ul class="top_menu">
<?php
    if(!$userid) {
        echo "<li>홈페이지에 오신 것을 환영합니다~~~ </li>";
    }
    else {
        $logged = $username."(Level:".$userlevel.")님 환영합니다. ";
        echo "<li>$logged</li>";
    }
?>
    </ul> <!-- top_menu -->

    <ul class="main_menu">
<?php
    if(!$userid) {
?>
        <li><a href="../member/index.php?type=form">회원 가입</a> </li>
        <li><a href="../member/index.php?type=login_form">로그인</a></li>
<?php
    } else {
?>
        <li><a href="../member/logout.php">로그아웃</a> </li>
        <li><a href="../member/index.php?type=modify_form">정보 수정</a></li>
<?php
    }
?>
    <li>|</li>
    <li><a href="../mboard/index.php?type=list&table=_notice">공지 게시판</a></li>
    <li><a href="../mboard/index.php?type=list&table=_qna">QNA 게시판</a></li>
    <li><a href="../mboard/index.php?type=list&table=_youtube">YOUTUBE 게시판</a></li>
    </ul> <!-- main_menu -->
</header>