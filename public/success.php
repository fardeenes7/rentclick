<?php
session_start();
include_once "php/config.php";
$user = $_SESSION['user-id'];
$id = $_POST['productid'];
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * from content WHERE id='$id'"));

$sql = "INSERT INTO bookings (user, content) VALUES ('$user', $id)";
mysqli_query($conn, $sql);
echo "<script>
window.alert('Booked ".$row['name']." Successfully');
window.location.href = 'user/profile.php';
</script>";
?>

