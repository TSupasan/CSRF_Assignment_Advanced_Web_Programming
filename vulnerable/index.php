
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Vulnerable CSRF Demo</title>
</head>
<body>
<div class="container">
<h2>Change Email (VULNERABLE)</h2>
<form method="POST" action="process.php">
    <label>New Email:</label>
    <input type="email" name="email" required>
    <button type="submit">Update Email</button>
</form>
</div>
</body>
</html>
