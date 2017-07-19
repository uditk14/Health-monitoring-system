<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (0.5))); // 0.5 sec
?>
<html>

<form action='login1.php' method='POST'>

Username/Email Address :<input type='text' name='uname'><br>
Password :<input type='password' name='up'><br>
<input type='submit' value ='login'><br>
</form>
<form action='signup11.php' method='POST'>
<input type='submit' value='Sign Up'>

</form>
</html>
