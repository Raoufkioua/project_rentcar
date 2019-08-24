
<?php
require_once('./Connexion.php');

try {
    $email = $_POST['email'];
    $conn = Connexion::connect();
    $stmt = $conn->prepare("SELECT * FROM users_bd where email ='$email'");
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        echo  "User Doesn't exist ! ";
        $_SESSION['message'] = "User Doesn't exist ! ";
    } else {
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $v = $stmt->fetchObject();

        if ($v->cin == $_POST['pass']) {
            header('Location:../html/Home.html ');

            
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
  