
<?php
include_once 'connect_db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$stdid=$_POST['stdid'];
$result=mysql_query("SELECT stdid, username FROM stud WHERE username='$username' AND stdid='$stdid'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['stdid']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/Home.php");
}else
{
$message="<p align=center><font color=red>Invalid login Try Again</font></p>";
}
}
echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
        <title>Online Registration | Eritrea Institute Of Technology (EIT)</title>
        <meta charset="UTF-8">
		<link rel="shortcut icon" href="../images1/eit.png" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <style>
            
            body{
                background-color:#f0f0f0;
                  height:100%;
                background-size: cover;
            }
			a:link    {background-color:transparent; text-decoration:none}
            #content{
                width:60%;
                margin:0 auto;
                background-color:WHITE;
              
            
                 
            }
            
            #part1{
                border: 1px solid;
                height:150px;
                clear:right;              
				opacity: 1;                         
                background-size:cover;
			    background-image:url('../images1/eit3.jpg');
            }
            #part1 img{
                width:150px;
                height:150px;
                float:left;
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
                           margin-top: 4%;
                          
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
                           background-color: #E8E8E8;
                            
					  }
                       #form h1{
                  text-align: center;
                           background-size: 20px;
                          
                           background-color: red;
                       }
                       button{
                           text-align: center;                                                 
                           background-color:teal;
						   border:1px solid white; 
                           width:50%;
                           height:35px;
                           line-height: 35px;                         
                           position:relative;
                           opacity:5;
                           border-radius: 8px; 
                           color:white;						   
                           
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
			input[type=submit] {
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
    <body>
        <div id="content">
        <div id='part1'>
            <img src="../images1/logo1.gif" alt="COLLEGE OF EIT" />
            
            
             
            
            
        </div>
             
            <hr/>
      
             <div id="form">
			     <form method="post" action="index.php">
                 <font face="blade runner movie font"><h1>Login here</h1> </font>      
                                                
                                                
                                                
                    <blockquote>
<p>
<div align="center"><img src="images1/login.jpg" width="240px" height="151px"></div>
</p>

	  $message   
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 
		 <input type="text" name="username" value="" placeholder="Username" required></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;
		<input type="password" name="stdid" value="" placeholder="student ID" required></p>
		
		
       
        <p class="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="submit" name="submit" value="Login"></p>
      
    </blockquote>
</form>
            </div>
        
        
      
                    
 
        
        
         <div id='footer'>
            
            <p>&copy;2017 Eit Online-Registration. All right Reserved. </p>
            
            
        </div>
        
              </div>
         
</body>
</html>
LOGIN;
?>
