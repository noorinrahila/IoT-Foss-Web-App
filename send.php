<!DOCTYPE HTML>
<html>
    <head>
        <title>Alarm</title>
        <style>
            body{
                background-image: url(10.jpg);
                background-repeat: no-repeat;
                background-size: 1400px 790px;
            }
            #container{
                float:left;
font-family:"Trebuchet MS", Helvetica, sans-serif;
background-color:rgba(255,255,0,0.3);
width:45%;
height:97vh;

            }
            #content{
                               float:left;
font-family:"Trebuchet MS", Helvetica, sans-serif;
background-color:rgba(255,0,0,0.3);
width:50%;
height:97vh;

margin-left: 20px;
color: white;
            }
            
            .button{
                background-color: black;
                
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
   
    font-size: 25px;
    margin: 2px 2px;
    cursor: pointer;
            }
     
            .button{
                 background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
            }
            .button1 {background-color: #008CBA;} /* Blue */
            
       
        </style>
    </head>
    <div id ="container">
    <centre><br>
        <h1><header><B><font color="black" style="font-size:70; align:center;"> ALARM </font></header></h1></B>
        
        <div style ="width:294px;background-color: rgba(255,255,255,0.7);margin-left: 90px;" >
             <form action="" form name="Alarm">
               
                 <input name="display" placeholder="0" style="width:280px; height:60px; text-align:center; font-size:30; border-radius:8px; margin:3px"/>
                 <br>
                 <input type="button" value="1" onclick="alert('Invalid Input!\nTry Again!!');"style="width:70px; height:60px; font-size:30; border-radius:8px; margin:3px;"/>
                 <input type="button" value="2" onClick="alert('Invalid Input!\nTry Again!!');" style="width:70px; height:60px; font-size:30; border-radius:8px;"/>
                 <input type="button" value="3" onClick="alert('Invalid Input!\nTry Again!!');" style="width:70px; height:60px; font-size:30; border-radius:8px;"/>
                 <input type="button" value="C" onClick="btnclear()" style="width:60px; height:60px; font-size:30; border-radius:8px;"/>
                 <br>
                 <input type="button" value="4" onClick="alert('Valid Input\nclick on to open the door');" style="width:70px; height:60px; font-size:30; border-radius:8px; margin:3px;"/>
                 <input type="button" value="5" onClick="alert('Invalid Input!\nTry Again!!');" style="width:70px; height:60px; font-size:30; border-radius:8px;"/>
                 <input type="button" value="6" onClick="alert('Invalid Input!\nTry Again!!');" style="width:70px; height:60px; font-size:30; border-radius:8px;"/>
                 <input type="button" value="STAY" onClick="btnstay()" style="width:60px; height:60px; font-size:30; border-radius:8px;"/>
                 <br>
                 <input type="button" value="7" onClick="alert('Valid Input!\nClick off to close the door');" style="width:70px; height:60px; font-size:30; border-radius:8px; margin:3px;"/>
                 <input type="button" value="8" onClick="alert('Invalid Input!\nTry Again!!');" style="width:70px; height:60px; font-size:30; border-radius:8px;"/>
                 <input type="button" value="9" onClick="alert('Invalid Input!\nTry Again!!');" style="width:70px; height:60px; font-size:30; border-radius:8px;"/>
                 <input type="button" value="0" onClick="alert('Invalid Input!\nTry Again!!');" style="width:60px; height:60px; font-size:30; border-radius:8px;"/>
                 <br>
                 <input type="button" value="AWAY" onClick="btnaway()" style="width:140px; height:60px; font-size:30; border-radius:8px; margin:3px;"/>
                 <input type="button" value="DISARM" onClick="btndisarm()" style="width:140px; height:60px; font-size:30; border-radius:8px;"/>
            </form>
        </div>
    </div>
    <div id="content">
       <button type="submit" name="click on" class="button" onclick="myFunction()"   style="margin-left: 130px;">CLICK ON</button>
            <p style="font-size:20px;margin-left: 130px;"> Status </p><p id ="demo"style="margin-left: 130px;"> 0</p>
            <button type="submit" name="click on" onclick="myFunctionadd()"class="button button1" style="float:right;margin-top: -150px;margin-right: 120px;">CLICK OFF</button><br/><br/>
            <p style="font-size:20px;float: right;margin-top: -120px;margin-right: 120px;"> Status </p><p id ="demo1"style="font-size:20px;float: right;margin-top: -80px;margin-right: 120px;">0 </p> 
       <button type="submit" name="click on" class="button" onclick="sms.php"   style="margin-left: 210px;background-color: red;">SUBMIT</button>
   
    <div id="content1">
        <img src="12.jpg" style="width:100px; height:70px;margin-top: 250px;margin-bottom:5px;border-radius: 60%;"onclick=""document.getElementById('id01').style.display='block'" "/>
        <p style="font-size: 25px;margin-top: -6px;"> Police </p>
         <p style="font-size: 25px;margin-top: -55px;margin-left: 150px;margin-bottom: 20px;"> Fire </p>
        <img src="7.png" style="width:100px;height: 70px; margin-top: -700px;margin-left: 150px;margin-bottom: 70px;" onclick="DoFuncOn()"/>
        
    </div>
             </div>
        <script> 
            function btnclear(){
                document.Alarm.display.value="";
                document.Alarm.display.style.textAlign="center";
            }
             function btnstay(){
                document.Alarm.display.value="STAY";
                document.Alarm.display.style.textAlign="center";
            }
             function btnaway(){
                document.Alarm.display.value="AWAY";
                document.Alarm.display.style.textAlign="center";
            }
             function btndisarm(){
                document.Alarm.display.value="DISARMED";
                document.Alarm.display.style.textAlign="center";
            }
            
            var counter = 0;
            var counter1 =0;
function add() {
    return counter += 1;
}

function myFunction(){
    document.getElementById("demo").innerHTML = add();
}
function addoff() {
    return counter1 += 1;
}
function myFunctionadd(){
    document.getElementById("demo1").innerHTML = addoff();
}
function DoFunc()
{
    if (confirm('Are you sure to inform to police?'))
    {
        alert('Message has been send to police');
    }
}
function DoFuncOn()
{
    if (confirm('Are you sure to inform to fire station?'))
    {
        alert('Message has been send to fire station');
    }
}

            
            </script>
            
    </body>
</html>
