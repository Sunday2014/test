<h2>登录</h2>
<form action="handle_login.php" name="form1" method="post">
    <p>登录名称:
        <input type="text" name="username" class="text" id="lgname" size="20" >
    </p>
    <p>登录密码:
        <input type="password" name="password" class="text" id="lgpw" size="20">
    </p>
    <p>
        保存时间:
        <input type="radio" name="times" value="3600" checked="checked">1小时
        <input type="radio" name="times" value="86400">1天
    </p>
    <p>
        <input type="submit" name="submit" value="提交">
        <input type="reset" name="reset" value="重置">
    </p>
</form>

<?php
echo '<pre>';
print_r($_SERVER);