<html>
 <head>
  <title>result</title>
 </head>
 <body>
 你好，<?php echo htmlspecialchars($_POST['name']); ?>。
你 <?php echo (int)$_POST['age']; ?> 岁了。
 </body>
</html>