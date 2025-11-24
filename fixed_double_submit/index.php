
<?php
$token = bin2hex(random_bytes(32));
setcookie("csrf_cookie", $token, time()+3600, "/");
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="container">
<h2>Change Email (Double Submit Cookie)</h2>
<form method="POST" action="process.php">
    <label>New Email:</label>
    <input type="email" name="email" required>
    <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
    <button type="submit">Update Email</button>
</form>
</div>
</body>
</html>
