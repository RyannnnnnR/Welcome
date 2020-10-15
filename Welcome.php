
<html>
<head>
<title> Bob's Auto Parts: Order result</title>
</head>
<body>
    <?php

    echo $_GET["firstname"]." ".$_GET["lastname"].'<br/>';
    echo "total amount due is: ".($$_GET["tyres"]* 110).'<br/>';

    ?>
</body>
</html>