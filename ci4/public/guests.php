<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adan Cabildo BSCS</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/logo5.png" />
</head>
<body>
<h1> Here are the guests! </h1>
<?php
$servername = "192.168.150.213";
$username = "webprogmi212";
$password = "b3ntRhino98";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, website, comment, gender, reg_date FROM alcabildo_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. "- Email: ". $row["email"]. "- Website: ". $row["website"]. "- Comment: ". $row["comment"]. "- Gender: ". $row["gender"]. "- reg time: ". $row["reg_date"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<br>
<h3><a href="https://apcwebprog.csf.ph/~alcabildo2/Lab2/week9/PersonalWebsite/jsPlayground.php">Click here to get back!</a></h3>
</body>
</html>
