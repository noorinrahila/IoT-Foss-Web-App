<?php
session_start();
include 'dbh.php';

	
	$uname=$_POST['uname'];
	
	$password=$_POST['password'];
	//$passwordConfirm=$_POST['passwordConfirm'];
	$sql = "SELECT * FROM login WHERE uname='$uname' AND pswd='$password'";
	//$result =mysqli_query($conn ,$sql);
	$result =$conn ->query($sql);
      
	if(!$row =mysqli_fetch_assoc($result)){
           echo "<body style='background: url(4.jpg);background-repeat:no-repeat;position:relative; 
background-size:1220px 600px;'>";
  
            echo"<form action='form.php' method='POST'>
                <h2 style='text-align:center;color:#3A13D4;margin-top:20px;'>USERNAME OR PASSWORD IS INCORRRECT</h2>;
		
        <div id='wrapper' style=' margin:0px auto;
	width:290px;background-color:rgba(169,168,173,0.7);color:white;
	height:250px;padding:40px 40px 40px 40px;top:40px;
	position:relative;padding:4em;text-align: center;'>
     <img src ='1.png' style='width: 120px;height: 130px;margin-top: -60px;margin-right: 30px;border-radius:50%;'/>
   <input type='text' name='uname'placeholder='UserName*' style='height: 45px; width:300px;
     font-size: 18px;margin-bottom: 20px;border-radius: 5px;color:darkred;'required><br>
 
   <input type='password' name='password' placeholder='Password*' style='height: 45px;width:300px;
   font-size: 18px; margin-bottom: 20px; border-radius: 5px;color:darkred;' required><br>
   <button type='submit' name='submit' class='button'style=' background-color: black;
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
   
    font-size: 25px;
    margin: 2px 2px;
    cursor: pointer;'>Sign In<br/>
             </form></div>";
	}else{
                echo "<body style='background: url(4.jpg);background-repeat:no-repeat;position:relative;
  
background-size:1220px 600px;'>";
		echo"<!DOCTYPE html>
<html>
<head>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
 
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */
.button4 {background-color: #e7e7e7; color: black;} /* Gray */
.button5 {background-color: #555555;} /* Black */
#wrapper{
margin:0px auto;
	width:100%;
	
        
	color:white;
	height:250px;
	padding:40px 40px 40px 40px;
	top:70px;
	position:relative;
	padding:4em;
	text-align: center;
}
</style>
</head>
<body>
<div id='wrapper'>
<h2 style='color:#D61181;'>SELECT ANY ONE OPTION</h2>

<form action='maintenace.php'method='POST'>
<button class='button' >MAINTENANCE</button>
</form>
<form action='send.php'method='POST'>
<button class='button button2'>SEND</button>
<button class='button button3'>CLICK</button>
<button class='button button4'>ALERT</button>
</form>
</div>
</body>
</html>

";
	}
		
	//if(!$row = $result -> fetch_assoc())
	//header("Location:signup.php");
	
?>

