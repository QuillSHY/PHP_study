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
</body>
</html>