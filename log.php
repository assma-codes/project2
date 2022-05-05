<?php 

$host="localhost";
$user="assma";
$password="123";
$db="book-store";

/*mysqli_connect($host,$user,$password);
mysql_select_db($db);*/
$conn = mysqli_connect($host,$user,$password,$db);
if(isset($_POST['uname'])){
    
    $user=$_POST['uname'];
    $pass=$_POST['psw'];
    
    $sql="select * from users where USERNAME='".$user."'AND PASSWORD='".$pass."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
		header("Location: about-us.html");
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>