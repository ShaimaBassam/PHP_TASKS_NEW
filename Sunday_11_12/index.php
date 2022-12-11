<!-- task1 -->
 <?php phpinfo(); ?>

 <!-- task2 -->
 <?php echo
"'Tomorrow I 'll learn PHP global variables.'
'This is a bad command: del c:.'
Expected Output:
Tomorrow I'll learn PHP global variables.
This is a bad command: del c:."
?>

<!-- task3 -->
<?php
$name = $_POST['name'];
echo " <h3> Hello $name </h3>";
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
</body>
</html>

<!-- task4 -->
<?php  

echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
?>  

<!-- task5 -->
<?php

$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>

<!-- task6 -->
<?php

$url = 'https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>

<!-- task7 -->
<?php

$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>

<!-- task8 -->
<?php

header('Location: https://www.w3schools.com/');
?>