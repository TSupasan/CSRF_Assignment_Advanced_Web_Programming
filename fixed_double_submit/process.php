
<?php
$cookie = $_COOKIE['csrf_cookie'] ?? '';
$form = $_POST['csrf_token'] ?? '';

if($cookie === '' || $form === '' || $cookie !== $form) {
    die("<div class='container'><link rel='stylesheet' href='styles.css'>
    <h2 class='error'>CSRF Validation Failed</h2></div>");
}

$email = $_POST['email'];
file_put_contents("last_change.txt", "Email changed to: ".$email);

echo "<div class='container'><link rel='stylesheet' href='styles.css'>
<h2>Email Updated (Double Submit Cookie Secure)</h2>
<p class='success'>New email: $email</p>
</div>";
?>
