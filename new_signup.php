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
    height: 270px;
}
#submit{
    font-size: 17px;
    margin-bottom: 30px;
}
</style>
</head>
<body>
<h1 id="header">Sign Up</h1>
<div id="form">
<form action="action_new.php" method="POST">
<br>
<br>
Name: <br><input type="text" id="user" placeholder="username" name="user" autocomplete="off">
<br>
<br>
Password: <br><input type="password" id="pass" placeholder="password" name="password">
<br>
<br>
Recheck: <br><input type="password" id="recheck" placeholder="recheck password" name="recheck">
<br>
<br>
<input type="submit" id="submit" value="signup" name="submit">
<br>
<br>
</form>      
</div>
</body> 
</html>  