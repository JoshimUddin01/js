<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    button{
        padding: 5px;
        width: fit-content;
    }
.login_success {
    display: none;
    width: 350px;
    margin: auto;
}
</style>
<body>
    
<form action="login-check.php" method="POST">
<input type="text" placeholder="username"/><br>
    <input type="password" placeholder="password"/> <br>
    <input type="submit" value="login" name="login" onclick="checkCookie()">
</form>
<div class="login_success">
    <p>your login success using cookies. write document.cookie in your console to see the cookies you have set.</p>
    <button>signout</button> 
</div>
<script src="./app.js"></script>
</body>
</html>