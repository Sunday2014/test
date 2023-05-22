<?php
if (isset($_POST['times'])) {
    $time = $_POST['times'];
}

if (!isset($_SESSION)) {
    session_set_cookie_params(['lifetime'=>$time, 'httponly'=>true]);
    session_start();
}
$_SESSION['username'] = $_POST['username'];
if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {

    echo "<script>alert('登录成功'); location.href='index.php';</script>";
} else {
    echo "<script>alert('登录失败，用户名或密码不正确'); location.href='login.php'</script>";
}
echo "<script>alert('hello world')</script>";