
<?php
session_start();

if(!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf']) {
    die("<div class='container'><link rel='stylesheet' href='styles.css'>
    <h2 class='error'>CSRF Token Invalid</h2></div>");
}

$email = $_POST['email'];
file_put_contents("last_change.txt", "Email changed to: ".$email);

echo "<div class='container'><link rel='stylesheet' href='styles.css'>
<h2>Email Updated (Secure)</h2>
<p class='success'>New email: $email</p>
</div>";
?>
