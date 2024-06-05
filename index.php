<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>External CSS Background Image</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<form method="post" action="assets/database/login.php">
    <div class="logobox">
        <img src="assets/img/logo.png" alt="Logo" class="logo">
        <p class="welcome">WELCOME TO <BR> CYBER BATTALION</p>
    </div>

    <div class="loginbox">
        <p class="text">CYBER</p>
        <p class="text2">VISITOR'S LOG</p>
        <p class="text3">LOG-IN</p>
    </div>

    <div class="underline"></div>
    <div class="box">
        <img src="assets/img/user-icon.png" alt="user" class="user">  
        <input type="text" name="username" class="username-input" placeholder="Enter your username">
    </div>
 
    <div class="box2">
        <img src="assets/img/padlock.png" alt="padlock" class="padlock">     
        <input type="password" name="password" class="password-input" placeholder="Enter your password">    
        <button type="submit" class="submit-button">Submit</button>
    </div>
</form>


</body>
</html>