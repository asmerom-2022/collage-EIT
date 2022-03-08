<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$user=$_SESSION['username'];
}
?>
<?php
$conns=mysql_connect("localhost","root","");
if(!$conns)
{
die("unable to connect:".mysql_error());
}
mysql_select_db("nati",$conns);
$sql_query="insert into register(id,name,sex,dept,major,minor,city,residence,mobile,email,nationality,nid,year,semister,program,readmit,employeed)     
values('$_POST[id]','$_POST[name]','$_POST[sex]','$_POST[dept]','$_POST[major]','$_POST[minor]',
'$_POST[city]','$_POST[residence]','$_POST[mobile]','$_POST[email]','$_POST[nationality]','$_POST[nid]',
'$_POST[year]','$_POST[semister]','$_POST[program]','$_POST[readmit]','$_POST[employeed]')";
if(!mysql_query ($sql_query,$conns))
{
die("please check the records");
}

mysql_close($conns);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Online Registration</title>
        <meta charset="UTF-8">
		<link rel="shortcut icon" href="../images1/eit.png" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
            body{
                  height:100%;
                background-size: cover;
				background-color:#f0f0f0;
            }
			a:link    {background-color:transparent; text-decoration:none}
            #content{
                width:80%;
                margin:0 auto;
                background-color:WHITE;
              
            
                 
            }
            
            #part1{
                border: 1px solid;
                height:200px;
                clear:right;              
				opacity: 1;                         
                background-size:cover;
			    background-image:url('../images1/eit3.jpg');
            }
            #part1 img{
                width:200px;
                height:200px;
                float:left;
				}
                
            
            #part1 h1{
                text-align: center;
                  color:darkblue;
            }
            
            
            
            
                       #part3{
                           padding-top: 50px;
                           padding-left: 5px;
                           width:55%;
                           padding-right:0px;
                           margin-right: 0px;
                           float:left;
                           margin-bottom: 0px;
                           
                       }
                       #footer{
                           height:40px;
                           width:100%;
                           margin:0 auto;
                           background-color: #003399;
                           opacity: 3;
                           position:relative;
                           margin-top: 6%;
                          
                           left:0px;
                           bottom:0px;
                           float:bottom;
                       }
                       #footer p{
                       text-align: center;
                           color:white;
                           font-size: 15px;
                           font-weight: bold;
                           padding:5px 0px 0px 0px;
                             }
					                                                
                       
                       #form{
                           position:relative;
                           
                          margin:0 auto;
                          width:60%;
                          
                       }
                       #form h1{
                  text-align: center;
                           background-size: 20px;
                          
                           background-color: red;
                       }
                       input[type=text], input[type=password]{ width: 278px; }

  

    input {
      position: relative;
      bottom: 1px;
      margin-right: 4px;
      vertical-align: middle;
    }
  }

                       input {
  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
  font-size: 14px;
}

input[type=text], input[type=password], input[type=email]{
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px; // Can we get this on WebKit please?
  @include box-shadow(inset 0 1px 3px rgba(black, .12));
			
  
			}
			input[type=submit],input[type=reset] {
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #d4d4d4;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  @include box-sizing(content-box); // Firefox sets this to border-box by default
  @include linear-gradient(top, #edf5f8, #cde5ef);
  @include box-shadow(inset 0 1px white, 0 1px 2px rgba(black, .15));

  
}


        </style>
        
    </head>
    <body >
        <div id="content">
        <div id='part1'>
            <img src="../images1/logo1.gif" alt="COLLEGE OF EIT" />
             
            
            
        </div>
             
            <hr/>
      
             <div id="form">
			     <form method="post" action="Register.php">
                 <font face="blade runner movie font"><h1>Registration Form</h1> </font>      
                                                
                                                
                                                
                   
<p>
<font face="lucida handwriting"><div align="center" >Please Fill The Form And Submit to register online!</div></font>
</p>
<hr align="center">




<p><B>Full-Name:</B>
<input type="text" size=50 name="name" required title="Enter valid full name." pattern="[A-Za-z]{3,20}[ ]{1}[A-Za-z]{3,20}[ ]{1}[A-Za-z]{3,20}">
</p>




<p><B>Id Number:</B><input type="text" name="id" required pattern="[0-9]{2}/[0-9]{1,4}">
</p>

<p><B>Gender:</B>
<input type="radio" name="sex" value="M" >Male
<input type="radio" name="sex" value="F" >Female
</p>

<p><b>Department:</b>&nbsp <select name=dept size=1>	  
           <option value=''>
		   <option value='Chemical Engineering'>Chemical Engineering
		   <option value='Civil Engineering'>Civil Engineering
		   <option value='Computer Engineering'>Computer Engineering
		   <option value='Electrical Engineering'>Electrical Engineering
		   <option value='Mining Engineering'>Mechanical Engineering
		   <option value='Mining Engineering'>Mining Engineering
		   <option value='Processing Engineering'>Processing Engineering
		       </select>
</p>
  

<p>    Major:<input type="text" name="major"  pattern="[A-Za-z]{3,20}">
    Minor:<input type="text" name="minor"  pattern="[A-Za-z]{3,20}">
</p><p>
City:<input type="text" name="city" required pattern="[A-Za-z]{3,10}">
</p><p>
Residence:<input type="text" name="residence" required pattern="[A-Za-z]{3,10}">
</p><p>
Mobile:<input type="text" name="mobile" required pattern="[07]{2}[0-9]{6}">
</p><p>
Email:<input type="text" name="email"  pattern="[A-Za-z0-9@./:]{3,}">
</p><p>
Nationality:<input type="text" name="nationality" required pattern="[A-Za-z]{3,10}">
</p><p>
National ID.NO:<input type="text" name="nid"  pattern="[ER-]{3}[0-9]{7}">
</p>



<p><b>Year of study:</b>

&nbsp&nbsp <input type="radio" name="year" value="II" required>II
&nbsp&nbsp <input type="radio" name="year" value="III" required>III
&nbsp&nbsp <input type="radio" name="year" value="IV" required>IV
&nbsp&nbsp <input type="radio" name="year" value="V" required>V
</p>
<p><b>Semister:</b>

&nbsp&nbsp <input type="radio" name="semister" value="I"  required>I
&nbsp&nbsp <input type="radio" name="semister" value="II" required>II
</p>

<p>
<b>Addtional:</b>

Programme:<input type="radio" name="program" value="Degree" required>Degree</td><td><input type="radio" name="program" value="Diplome" required>Diploma
</p><p>
Re-admitted from this semister:<input type="radio" name="readmit" value="yes" required>Yes
<input type="radio" name="readmit" value="no" required>No
</p><p>
Employment:<input type="radio" name="employeed" value="employeed" required>Employed<input type="radio" name="employeed" required value="unemployeed">Unemployed
</p>





&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="submit">
</form>


      

      </div>
        
        
      
                    
 
        
        
         <div id='footer'>
            
            <p>&copy;2017 Eit Online-Registration. All right Reserved. </p>
            
            
        </div>
        
              </div>
    
    
    </body>
</html>
