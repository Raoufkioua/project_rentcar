
<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_rent_car";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $email = $_POST['email'];


    $stmt = $conn->prepare("SELECT * FROM users where email ='$email'");
    $stmt->execute();
    if ($stmt->rowCount() == 0) {
        echo  "User Doesn't exist ! ";
        $_SESSION['message'] = "User Doesn't exist ! ";
    } else {
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $v = $stmt->fetchObject();

        /* var_dump($_POST['pass']);
        var_dump($v->password);
          var_dump($v->password == $_POST['pass']); True
            var_dump(password_verify($_POST['pass'], $v->password)); False ??????????????????????*/

        if ($v->password == $_POST['pass']) {


            $_SESSION['email'] = $v->password;
            $_SESSION['first_name'] = $v->first_name;
            $_SESSION['last_name'] = $v->last_name;
            $_SESSION['active'] = $v->active;
            // this how we know that hesigned in 
            $_SESSION['logged_in'] = true;
            echo "Login Succeeded";
        } else {
            $_SESSION['message'] = " Wrong password ! ";
            echo "Wrong Password !! ";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
  