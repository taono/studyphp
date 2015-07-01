<!DOCTYPE html PUBLIC "-//w3c//DTD XHMTL 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://wwww.w3.org/1999/xhtml" xml:lang= "en" lang="en">
<head>
    <meta http-equiv="Content-Type" content= "text/html; charset=utf-8"/>
    <title>Greetings!</title>
</head>
<body>
    <?php //script3.7 -hello3-7.php
    //error reporting didn't display my syntax error at all. I found out manually.
    ini_set('display_errors',1);//let me learn from my mistakes.
    error_reporting (E_ALL|E_STRICT);//show all possible problems.
    
    $name = $_GET['name'];
    
    print "<p>Hello,<span style=\"font-weight: bold;\">$name</span>!</p>" ;
    
    ?>
    
</body>
</html>