
<?php
session_start();
$email = $_POST['email'] ?? '';

file_put_contents("last_change.txt", "Email changed to: ".$email);

echo "<div class='container'><link rel='stylesheet' href='styles.css'>
<h2>VULNERABLE: Email Updated</h2>
<p class='success'>New email: $email</p>
</div>";
?>
