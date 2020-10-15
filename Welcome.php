<html>
<head>
<title> Bob's Auto Parts: Order result</title>
</head>
<body>
    <?php
    $servername="127.0.0.1";
    $user="abc";
    $password="abc";
    $dbname="Assignmentdb";
    
    // Create connection
    $conn = mysqli_connect($servername,$user, $password,$dbname) or die(mysqli_connect_error());

    $unsafe_firstname = $_POST['firstname'];
    $unsafe_lasstname = $_POST['lastname'];
    $unsafe_nooftyres = $_POST['tyres'];
    $amount= $unsafe_nooftyres*110;

    $stmt = $conn->prepare("INSERT INTO Orders (firstname, lastname, noOftyres, amount)
    VALUES (?, ?, ?,?)");

    // TODO check that $stmt creation succeeded

    // "s" means the database expects a string "i" means integer
    $stmt->bind_param("ssii", $unsafe_firstname,$unsafe_lasstname,$unsafe_nooftyres,$amount);

    $stmt->execute();

    $stmt->close();

    $conn->close();
    echo $_POST["firstname"]." ".$_POST["lastname"].'<br/>';
    echo "total amount due is: ".($_POST["tyres"]* 110).'<br/>';

    ?>
</body>
</html>