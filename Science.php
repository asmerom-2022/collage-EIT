<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$stdid=$_SESSION['stdid'];
$user=$_SESSION['username'];
}

?>
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
                
                font-family:Fallback, sans-serif;
                height:100%;
                background-size: cover;
				link-color:none;
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
            
            
            #part2 ul {
                
                list-style: none; <!--disc circle square none-->
                
                
            
                       }
                        #part2 ul li{
                           background-color:teal;
                           border:1px solid white; 
                           width:15%;
                           height:35px;
                           line-height: 35px;
                           text-align:center;
                           float:left;
                           position:relative;
                           opacity:5;
                           border-radius: 8px;
                           margin:3px;
                           clear:right;
                           
                       }    
                       #part2 ul li a{
                           text-decoration: none;
                           color:white;
                           display:block;
                       }
                       #part2 ul li:hover{
                           background-color: silver;
                           display:block;
                           border-radius:8px;
                       }
                       #part2 ul ul li{
                           width:100%;
                       }
                       #part2 ul ul{
                           position:absolute;
                           display:none;
                       }
                       
					   #part2 ul li:hover > ul{
                           display:block;
                       }
                       
					                        
                       #part3{
                           padding-top: 50px;
                           padding-left: 15px;
                           width:55%;
                           padding-right:20px;
                           margin-right: 0px;
                           float:left;                           
						   margin-bottom: 0px;
                           
                       }
                      #form1{
                           position:relative;                          
                          margin:0 auto;
                          width:100%;
                          float:left;
						   
                       }
                   
					  #form1 table{
                       border:1px;
                       width:100%; 
					   border-collapse: collapse;
                       font-size:2;
					   font-family:Calibri Light;
					   	}
					th {
                               text-align: center;
                               padding: 6px;
}                     
                     td{
                               text-align: left;
							   
                               padding: 6px;
}
tr:nth-child(odd){background-color: #f0f0f0}
                       #tr{
                           background-color: lightblue;
                       }
				   	  #footer{
                           height:40px;
                           width:100%;
                           margin:0 auto;
                           background-color: #003399;
                           opacity: 3;
                           position:relative;
                           margin-top: 100%;
                          
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
                       #link{
                          padding-top: 50px;
                          width:35%;
                          position:relative;
                          top:5px;
                          left:0%;
                          right:0px;
                          float:left;
                          clear:right;
                          padding-left:10px;
                          
                       }
                       
/* Full-width input fields */
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color:gray;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
	opacity:40;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: teal;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 30%;
    height:10%;
	}


.container {
    padding: 5px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top:0px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

                      
                      
                       
        </style>
        
    </head>
    <body onload="init()"> 
 

        <div id="content">
        <div id='part1'>
            <img src="../images1/logo1.gif" alt="COLLEGE OF EIT" />

            
        </div>
        
        
        <div id='part2'>
            
            
                <ul>
                    <li class="list1"><a href="Home.php">Home</a></li>
                    <li class="list2"><a href="Engineering.php">Engineering</a></li>
                    <li class="list3"><a href="Education.php">Education</a>
                        </li>
                   
                    <li class="list5"><a href="Science.php">Science</a>
                                                
                    </li>
                     <li class="list4"><a href="semister1.php">Acedemic</a></li>
					 <li class="list4"><a href="admin Login/lo.html">Admin</a></li>
                
                   </ul>
            
            <br/><br/>
            <hr/>
      
            
        </div>
        
        
       
        <div id='part3'>
            <blockquote><h2>COLLEGE OF SCIENCE</h2>
           <font face="Calibri Light" size=3> <p align="justify"> The College of Science consists of seven departments: Biology, Chemistry,
		   Computer Science, Earth Science, Library and Information Science, Mathematics
		   and Physics. Each department of the college is offering degree program.
All courses are coded as DEPTCODE xyz where DEPTCODE represents 
the name of the department which offers the course.
          </p><h4>Objectives</h4>
 <p align="justify">
The main guiding principles in developing the college's objectives
 are the quality and relevance of teaching/learning, and research.
 Thus, the main focuses of our objectives are to: </p>
 <br><ul type="disc">
     	<li>	Attract the brightest students including as many femalestudents as possible</li>
    <li>	Enhance the quality of teaching by strengthening teachingfacilities </li> 
	<li>Establish and strengthen a meaningful partnership withthe local and international linkages of the college. </li>
	<li>Strengthen the already existing research infrastructure soas to develop strong research tradition in the departments </li>
	<li>Improve the teaching learning environment by creating aconducive and welcoming atmosphere </li>
 </ul>
 
 
    </font><br><br><br>
 <p align="justify"><b>More info:</b>&nbsp;&nbsp;
    <a href="http://www.eit.edu.er">Eit website</a></p>
            </blockquote>
            
            </div>
             <div id='link'>
                <a href='#'> <h4>The college Science offers online-registration in this website.</h4></a>
                   <img id="myImage" src="images1/13.jpg" width=350px height=180px/>
                 <p align="justify"> The Collge of Science has registration office and programming office to register students via this website ......</p>
                <a href='#'> <h4>The college Science offers online-registration in this website.</h4></a>
                   <img src='images1/3.jpg' width=350px height=180px/><br/><br/>
				  <div id="form1">
                       <table>		                        
                       <tr id="tr">
                     <th>Science Departments</th>
                     </tr>
                     <tr>
                               <td><a href='#'>Department of Biology</a>  </td>                                  
                     </tr>
                     <tr>
                         <td><a href='#'>Department of Chemistry</a></td>
                     </tr>
					 <tr>
                         <td><a href='#'>Department of Computer Science</a></td>
                     </tr>
                <tr>
                         <td><a href='#'>Department of Earth Sciences(Geology) </a></td>
                     </tr>
                <tr>
                         <td><a href='#'>Department of Library and InformationScience</a></td>
						 </tr>
                <tr>
                         <td><a href='#'>Department of Mathematics</a></td>
                     </tr>
                <tr>
                         <td><a href='#'>Department of Physics </a> </td>
                     </tr>
                   <tr><td>&nbsp;</tr>
			 </table></div><br>
             <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button> </center>

 

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="Register.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="../images1/email.ico" alt="Avatar" class="avatar">
    </div>

    <div class="container">
     
	  <label>&nbsp;&nbsp;&nbsp;<font face="Algerian">amount NKf</font></label>
              <input type="text" id="psw" placeholder="100 NKf for semester I !                                                 60 NKf for semester II !" disabled><br>
           
            
              <label>&nbsp;&nbsp;<font face="Algerian"> Send To </font>&nbsp;&nbsp;&nbsp;</label>
              <input type="text"  id="usrname" placeholder="Enter email" required pattern="[A-Za-z0-9@./:]{3,}">
			  
			   
			  <img src="../images1/icon1.gif">&nbsp;&nbsp;<img src="../images1/icon2.gif" >&nbsp;&nbsp;<img src="../images1/icon3.gif">
			  &nbsp;&nbsp;<img src="../images1/icon4.gif">&nbsp;&nbsp;<img src="../images1/icon5.gif">
			  
              <center><button type="submit" >Pay 
                              </button><center>
          
        </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    	  </div>
       
        </div>


		

     </form>

				
			
            
             
             	
    </div>
    
    
    
    
        
         <div id='footer'>
            
            <p>&copy;2017 Eit Online-Registration. All right Reserved. </p>
            
            
        </div>
        
              </div>
           
    </body>
</html>
