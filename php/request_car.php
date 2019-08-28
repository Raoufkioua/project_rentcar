<?php
require_once('./Connexion.php');

try {

    $name = isset($_POST['name']) ? $_POST['name'] : NULL;
    $email = isset($_POST['email']) ? $_POST['email'] : NULL;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : NULL;
    
    $type = isset($_POST['type']) ? $_POST['type'] : NULL;
    $loc = isset($_POST['loc']) ? $_POST['loc'] : NULL;
    $number = isset($_POST['number']) ? $_POST['number'] : NULL;
    $date = isset($_POST['date']) ? $_POST['date'] : NULL;
    
    
    $conn = Connexion::connect();

   $stmt = $conn->prepare("INSERT INTO users VALUES ('$name','$email','$phone','$type','$loc','$number','$date')  ");
    $stmt->execute();
    if ($stmt->rowCount() == 1) {
        echo "<html>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<body>
<img src='../images/Success.png' style='display: block;
margin-left: auto;

margin-right: auto;'>
<h1><center> See you Soon Thank You !  </center></h1>
<a class='btn btn-primary' href='../html/First_page.html'style='display: block;
margin-left: auto;
margin-right: auto;'> Return TO HOME page > </a>
</body>


</html>";
    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo "<html>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <body>
    <img src='../images/123.jpg' style='display: block;
    margin-left: auto;
    
    margin-right: auto;'>
    
    <a class='btn btn-primary' href='../html/Home.html'style='display: block;
    margin-left: auto;
    margin-right: auto;'> Retry >>  > </a>
    </body>
    
    
    </html>";
}
$conn = null;
echo "</table>";
