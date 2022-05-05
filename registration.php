
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
    $sql = "insert into users ( NAME, PHONE, EMAIL, USERNAME, PASSWORD ) VALUES ( '$_POST[name]', '$_POST[phone]','$_POST[email]','$_POST[uname]', '$_POST[psw]')";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
		header("Location: about-us.html");
        echo " You Have Successfully registered";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>










