<?php
if (!isset($_SESSION)) {
    session_set_cookie_params(1);
    session_start();
}
if (isset($_SESSION['username'])) {
    echo "欢迎你{$_SESSION['username']}先生/女士";
} else {
    echo "<script>alert('你还没有登录，请登录后访问'); location.href='login.php'</script>";
}