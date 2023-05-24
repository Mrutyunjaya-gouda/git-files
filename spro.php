<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<frameset>
    <frame>
    <frame>
    <noframes>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    <?php
    for ($x = 0; $x <=4; $x++)
    {
        for ($y= 0;  $y<=$x; $y++)
        {
            echo "*";
        }
        echo "<br/>";
    }
	?>
    </body>
    </noframes>
</frameset>
</html>