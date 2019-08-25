<?php
require_once('./Connexion.php');
require_once('./php/Login.php');
try {



    $conn = Connexion::connect();
    $stmt = $conn->prepare("SELECT firstname , email , phone FROM users_bd where cin ='$cin'");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $v = $stmt->fetchObject();

    echo'
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    '












      
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
