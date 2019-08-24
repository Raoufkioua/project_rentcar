<?php
require_once('./Connexion.php');
try {

$firstname = isset($_POST['first_name']) ? $_POST['first_name'] : NULL;
$lastname =   isset($_POST['last_name']) ? $_POST['last_name'] : NULL;
$birthday =     isset($_POST['birthday']) ? $_POST['birthday'] : NULL;
$gender =       isset($_POST['gender']) ? $_POST['gender'] : NULL;
$email =        isset($_POST['email']) ? $_POST['email'] : NULL;
$phone =         isset($_POST['phone']) ? $_POST['phone'] : NULL;
$cin =           isset($_POST['cin']) ? $_POST['cin'] : NULL;

 $conn = Connexion::connect();
    $stmt = $conn->prepare("INSERT INTO users_bd VALUES ('$firstname','$lastname','$gender','$birthday','$email','$phone','$cin')  ");
    $stmt->execute();
    if ($stmt->rowCount()==1) {
    echo "<html>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <body>
    <img src='../images/Paymentsuccessful21.png' style='display: block;
    margin-left: auto;
    
    margin-right: auto;'>
    <h1><center> Please login Now !  </center></h1>
    <a class='btn btn-primary' href='../html/Login.html'style='display: block;
    margin-left: auto;
    margin-right: auto;'> Login </a>
    </body>
    
    
    </html>";
 


    }
        



      
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
