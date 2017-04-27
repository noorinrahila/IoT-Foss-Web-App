<!doctype html>
<html>
<head>
	<title>Scroll Effect</title>
	<style type="text/css">
            body{
                background-image: url(5.jpg);
                background-repeat: no-repeat;
                
                
            }
	*{
		margin: 0;
		padding: 0;
	}
	#header {
		height: 150px;
		width: 100%;
		position: fixed;
		background: #800080;
		transition:all 0.4s;
	}
	div {
		height: 2000px;
	}
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
   
}

li {
    float: left;
    margin-top: 27px;
    margin-left: 5px;
    
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 30px;
  
}

li a:hover {
    background-color:  #ff0080;
}
#himg {
    opacity: 0.7;
    filter: alpha(opacity=70); /* For IE8 and earlier */
}

#himg:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
	</style>
	
</head>
<body>
<header id="header">
    <img src="7.gif" style="float:left;height:65%;width:10%;margin-top: 25px;margin-left: 5px;border-radius: 45%;">
    <ul>
        <li><a  href="http://localhost/Foss/page-scroll-effects/index.html" style="  margin-left: 650px;">HOME</a></li>
  <li><a href="http://localhost/Foss/Login.php">LOGIN</a></li>
  <li><a href="http://localhost/Foss/sendmail.php">SEND FEEDBACK</a></li>
  
</ul>
	
</header>
    <div>
        <a href="http://localhost/Foss/Login.php">  <img src="5_1.jpg" id="himg" style="width:45%;height:15%;margin-top: 200px;margin-left: 5px;">
        </a>
        <a href="http://localhost/Foss/Login.php">  <img src="6.jpg" id="himg" style="width:45%;height:15%;margin-top: 200px;margin-left: 60px;">
        </a>
    </div>

<script type="text/javascript">

function Scroll(){
var top = document.getElementById('header');
var ypos = window.pageYOffset;
if(ypos > 587) {
	top.style.opacity = "0";
}
else{
	top.style.opacity = "1";
	}
}
	window.addEventListener("scroll",Scroll);

	</script>
</body>
</html>
