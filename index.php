<!DOCTYPE html>
<html lang="en">
<head>
<title>LOGIN</title>
<style>
#header{
    display: block;
    text-align: center;
    font-size: 40px;
}                    
#form{                            
    display: inline-block;
    text-align: center;
    border: 2px solid black;
    margin-left: 370px;
    width: 27%;
    height: 200px;
}
#submit{
    font-size: 20px;
    margin-bottom: 30px;
}
#new_button{
    border: none;
    font-size: 16px;
}
</style>
</head>
<body>
<h1 id="header">Login here!</h1>
<div id="form">
<form action="action.php" method="POST">
<br>
<br>
Name: <br><input type="text" id="user" placeholder="username" name="user" autocomplete="off">
<br>
<br>
Password: <br><input type="password" id="pass" placeholder="password" name="password">
<br>
<br>
<input type="submit" id="submit" value="login" name="submit">
<br>
<br>

<span id="new">DON'T HAVE AN ACCOUNT?</span>
<span id="sign_up"><button id="new_button" name="sign_up">SIGN UP</button></span>
</form>      
</div>
</body> 
</html>  