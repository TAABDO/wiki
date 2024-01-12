<?php
use App\controllers\Usercontroller;
require __DIR__.'/../../../vendor/autoload.php';

if (isset($_GET['id'])) {
    $caty_id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(":id", $caty_id);

    if ($stmt->execute()) {
        echo "User successfully deleted!";
        header("location:users.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connect->close();
}
?>
