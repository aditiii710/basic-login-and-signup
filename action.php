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
        $sql="select Password from data_db where Username='$user'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res))
        {
            $x=mysqli_fetch_assoc($res);
            if($x['Password']===$pass)
            {
                header("Location: page.php");
            }
            else{
                header("Location: index.php");
            }
        }
        else{
            header("Location: index.php");
        }
    }
    if(isset($_POST['sign_up']))
    {
        header("Location: new_signup.php");
    }
}

?>