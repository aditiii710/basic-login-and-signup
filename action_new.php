<?php
$servername="localhost";
$username="root";
$userpass="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$userpass,$dbname);
if($conn)
{
    if(isset($_POST['submit']))
    {
        $user=$_POST['user'];
        $pass=$_POST['password'];
        $recheck=$_POST['recheck'];
        if($pass===$recheck && $user!=="" && $pass!=="")
        {
            $sql="insert into data_db(Username,Password) values('$user','$pass')";
            $res=mysqli_query($conn,$sql); 
            print_r($sql);
            header("Location: page.php"); 
        }
        else {
            header("Location: new_signup.php");
        }
    }
}
?>