<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Database Login</h1>
    <form method="POST" action="index.php">
        <label for="server">Server:</label>
        <input type="text" id="server" name="server" required><br>
        <label for="database">Database:</label>
        <input type="text" id="database" name="database" required><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
