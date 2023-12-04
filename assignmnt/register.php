<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration </title>
    <script src="script.js"></script>
</head>
<body>
    <form id="registrationForm">
        <input type="name" id="name" name="name" />
        <input type="phone" id="phone" name="phone"/> 
        <input type="email" id="email" name="email" required>
        <span id="emailStatus"></span>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
      
        <button type="submit">Register</button>
    </form>
</body>
</html>
