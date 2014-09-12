<html>
 <head>
  <title>test file</title>
 </head>
 <body>
 <?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using FireFox.<br />';
} else {
echo 'You are not using Internet Explorer.<br />';
}
echo $_SERVER['HTTP_USER_AGENT'];
?>
<form action="action.php" method="post">
 <p>姓名: <input type="text" name="name" /></p>
 <p>年龄: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
</body>
</html>