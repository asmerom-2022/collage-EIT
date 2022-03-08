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
                        #form{
                           position:relative;                          
                          margin:0 auto;
                          width:100%;
                          float:left;
						   
                       }
                   
					  #form table{
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
 <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
       
    </head>
    <body>
        <div id="content">
        <div id='part1'>
            <img src="../images1/logo1.gif" alt="COLLEGE OF EIT" />
            
            
            
        </div>
        
        
        <div id='part2'>
            
            
                <ul>
                    <li class="list1"><a href="Home.php">Home</a></li>
                    <li class="list2"><a href="Engineering.php">Engineering</a></li>
                    <li class="list3"><a href="Education.php">Education</a></li>                   
                    <li class="list5"><a href="Science.php">Science</a>
                    
                    </li>
                     <li class="list4"><a href="semister1.php">Acedemic</a></li>
					 <li class="list4"><a href="admin Login/lo.html">Admin</a></li>
                   </ul>
            
            <br/><br/>
            <hr/>
      
            
        </div>
        
        
       
        <div id='part3'>
            <blockquote><h2>COLLEGE OF ENGINEERING</h2>
           <font size=3 face="Calibri Light"> <p align="justify"> The College of Engineering and Technology is composed of seven departments: 
			                    Chemical Engineering, Civil Engineering, Computer Engineering, 
								Electrical and Electronics Engineering, Mechanical Engineering, and Mining Engineering.
                                 Each department of the college is offering degree program and
                                 at least one related diploma program in technology.
          </p><h4>Goals</h4>
 <p align="justify">The goal of the College of Engineering and Technology is to establish a full-fledged 
 college having well qualified and motivated academic staff, with best quality teaching
 facilities, capable of producing well qualified graduate engineers and technologists by 
 creating excellent teaching-learning environment. Besides the College aims at starting up 
 postgraduate teaching programs in several fields of engineering and also initiating research 
 projects and programs on relevant national issues. The College also aims at establishing 
 a sustainable teaching, research and consultancy program that would generate income to 
 cover some portion of the annual budget.</p>
 
 
 <p>The curricula of each department of the college have been set up, in such a way as
 to address the current and the projected national human resources needs of the country
 so that the graduates are qualified enough to work in various areas of engineering which 
 are crucial for economic and technological advancement of the country.</p>
<h5>Some of the short and long term objectives of the college are:</h5>
<ul type="disc">
    <li>To train undergraduate and post-graduate students who are qualified enough to carryout 
	professional engineering works in design and consultancy in manufacturing industries,
    communication technology, and in various civil and public works.</li>
    <li>To have highly qualified and competent staff members in the various areas of engineering
	through efficient staff development and recruitment program.</li>
    <li>To improve and develop a sound, dynamic and flexible curricula which addresses national
	demands and also meets international standards.</li>
    <li>To upgrade the education programs and initiate postgraduate programs.</li>
    <li>To improve the teaching and learning environment.</li>
    <li>To build and develop research infrastructure and initiate research programs aimed at 
	addressing relevant national problems.</li>
    <li>To initiate, upgrade and strengthen internal and external linkages of the College.</li> 

          
</ul>
    </font><br>
 <p align="justify"><b>More info:</b>&nbsp;&nbsp;
 <a href="http://www.eit.edu.er">Eit website</a></p></div></blockquote>
            <div id='link'>
                 <font color=darkblue><h4>The college Engineering offers online-registration in this website.</h4>
                   <img id="myImage" src="images1/4.jpg" width=350px height=180px />
                 <font size=4 face=nyala><p align="justify"> The Collge of Engineering has registration office and programming office to register students via this website ......</p>
				 </font></font>
               <font color=darkblue> <h4>The college Engineering offers online-registration in this website.</h4></font>
                   <img src='images1/5.jpg' width=350px height=180px/><br/><br/>
			
			  <div id="form">
                       <table>		                        
                       <tr id="tr">
                     <th>Engineering Department's</th>
                     </tr>
                     <tr>
                               <td><a href='#'>Chemical Engineering</a>  </td>                                  
                     </tr>
                     <tr>
                         <td><a href='#'>Computer Engineering</a></td>
                     </tr>
					 <tr>
                         <td><a href='#'>Civil Engineering</a></td>
                     </tr>
                <tr>
                         <td><a href='#'>Electrical & Electronics Engineering </a></td>
                     </tr>
                <tr>
                         <td><a href='#'>Mechanical Engineering</a></td>
						 </tr>
                <tr>
                         <td><a href='#'>Mining Engineering</a></td>
                     </tr>
                <tr>
                         <td><a href='#'>Processing Engineering</a> </td>
                     </tr>
                   <tr><td>&nbsp;</tr>
			 </table></div>
        <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button> </center>

 

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="register.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="../images1/email.ico" alt="Avatar" class="avatar">
    </div>

    <div class="container">
     
	  <label>&nbsp;&nbsp;&nbsp;<font face="Algerian">amount NKf</font></label>
              <input type="text" id="psw" placeholder="100 NKf for semester I !                                                      60 NKf for semesterII !"><br>
           
            
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
