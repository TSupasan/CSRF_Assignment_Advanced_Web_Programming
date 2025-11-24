
<?php session_start();
if(!isset($_SESSION['csrf'])) { $_SESSION['csrf'] = bin2hex(random_bytes(32)); }
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="container">
<h2>Change Email (Synchronizer Token)</h2>
<form method="POST" action="process.php">
    <label>New Email:</label>
    <input type="email" name="email" required>
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf']; ?>">
    <button type="submit">Update Email</button>
</form>
</div>
</body>
</html>
